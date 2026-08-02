<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->query('role', 'owner');
        
        // Ambil data pengajuan dari database, urutkan dari yang terbaru
        $orders = Order::with('items')->orderBy('created_at', 'desc')->get();
        
        $stats = [
            'pengajuan_baru' => $orders->where('status', 'Pengajuan Baru')->count(),
            'dikonfirmasi' => $orders->where('status', 'Dikonfirmasi')->count(),
            'dalam_kirim' => $orders->where('status', 'Dalam Pengiriman')->count(),
            'selesai' => $orders->where('status', 'Selesai')->count(),
        ];

        return view('orders', compact('role', 'stats', 'orders'));
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'notes' => 'nullable|string',
            'cart_data' => 'required|string',
        ]);

        $cartItems = json_decode($request->cart_data, true);

        if (empty($cartItems)) {
            return back()->with('error', 'Keranjang kosong.');
        }

        // Generate Order ID
        $date = now()->format('Ymd');
        $lastOrder = Order::orderBy('id', 'desc')->first();
        $nextId = $lastOrder ? $lastOrder->id + 1 : 1;
        $orderId = 'PGJ/' . $date . '/' . str_pad($nextId, 3, '0', STR_PAD_LEFT);

        // Buat Order
        $order = Order::create([
            'order_id' => $orderId,
            'buyer_name' => $request->buyer_name ?: 'Mitra Tanpa Nama',
            'buyer_city' => $request->buyer_city ?: 'Kota Tidak Diketahui',
            'notes' => $request->notes,
            'status' => 'Pengajuan Baru',
        ]);

        // Masukkan item-item
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'] ?? null,
                'product_name' => $item['name'] ?? 'Produk Tidak Dikenal',
                'store' => $item['store'] ?? null,
                'qty' => $item['qty'] ?? 1,
                'image_url' => $item['image'] ?? null,
            ]);
        }

        $role = $request->query('role', 'member');
        return redirect('/pengajuan?role=' . $role)->with('success', 'Prospek berhasil disimpan.');
    }

    public function show($id, Request $request)
    {
        $role = $request->query('role', 'owner');
        
        $order = Order::with('items')->findOrFail($id);
        
        return view('order_detail', compact('order', 'role'));
    }

    public function updateStatus($id, Request $request)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }

    public function history(Request $request)
    {
        $role = $request->query('role', 'Member');
        
        // Asumsi Mitra melihat semua order yang ada namanya, 
        // Idealnya ini difilter berdasarkan user_id login. 
        // Karena tidak ada sistem login, kita tampilkan semua order.
        $orders = Order::with('items')->orderBy('created_at', 'desc')->get();
        
        return view('member_prospek', compact('orders', 'role'));
    }

    public function export(Request $request)
    {
        $fileName = 'Laporan_Barang_Keluar_' . date('Y-m') . '.xls';
        $orders = Order::with('items')->where('status', 'Selesai')->orderBy('created_at', 'desc')->get();

        $headers = array(
            "Content-type"        => "application/vnd.ms-excel",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $callback = function() use($orders) {
            echo '<h3>LAPORAN BARANG KELUAR BULANAN</h3>';
            echo '<table border="1" style="border-collapse: collapse;">';
            echo '<thead>';
            echo '<tr>';
            $thStyle = 'background-color: #10B981; color: #ffffff; font-weight: bold; text-align: center; padding: 5px;';
            echo '<th style="'.$thStyle.'">No</th>';
            echo '<th style="'.$thStyle.'">Tanggal</th>';
            echo '<th style="'.$thStyle.'">No Pengajuan</th>';
            echo '<th style="'.$thStyle.'">Mitra</th>';
            echo '<th style="'.$thStyle.'">Kota</th>';
            echo '<th style="'.$thStyle.'">Produk</th>';
            echo '<th style="'.$thStyle.'">Jumlah (Qty)</th>';
            echo '<th style="'.$thStyle.'">Status</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            $no = 1;
            foreach ($orders as $order) {
                if ($order->items->count() > 0) {
                    foreach ($order->items as $item) {
                        echo '<tr>';
                        echo '<td style="text-align: center;">' . $no++ . '</td>';
                        echo '<td>' . $order->created_at->format('Y-m-d H:i') . '</td>';
                        echo '<td>' . $order->order_id . '</td>';
                        echo '<td>' . $order->buyer_name . '</td>';
                        echo '<td>' . $order->buyer_city . '</td>';
                        echo '<td>' . $item->product_name . '</td>';
                        echo '<td style="text-align: center;">' . $item->qty . '</td>';
                        echo '<td style="text-align: center;">' . $order->status . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr>';
                    echo '<td style="text-align: center;">' . $no++ . '</td>';
                    echo '<td>' . $order->created_at->format('Y-m-d H:i') . '</td>';
                    echo '<td>' . $order->order_id . '</td>';
                    echo '<td>' . $order->buyer_name . '</td>';
                    echo '<td>' . $order->buyer_city . '</td>';
                    echo '<td>-</td>';
                    echo '<td style="text-align: center;">-</td>';
                    echo '<td style="text-align: center;">' . $order->status . '</td>';
                    echo '</tr>';
                }
            }

            echo '</tbody>';
            echo '</table>';
        };

        return response()->stream($callback, 200, $headers);
    }
}
