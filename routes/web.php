<?php

use Illuminate\Support\Facades\Route;

use App\Models\Product;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('login');
});

Route::get('/seller', [ProductController::class, 'index']);
Route::get('/product/form', [ProductController::class, 'form']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::post('/product/upload-image', [ProductController::class, 'uploadImage']);
Route::post('/product/toggle-status/{id}', [ProductController::class, 'toggleStatus']);
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy']);

// Route khusus untuk menjalankan migration di cPanel tanpa terminal
Route::get('/run-migrations', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        return "Berhasil menjalankan migration: <br><pre>" . \Illuminate\Support\Facades\Artisan::output() . "</pre>";
    } catch (\Exception $e) {
        return "Gagal: " . $e->getMessage();
    }
});

// API Routes for Category & Etalase in Product Form
Route::post('/product/category/store', [ProductController::class, 'storeCategory']);
Route::delete('/product/category/delete', [ProductController::class, 'deleteCategory']);
Route::post('/product/etalase/store', [ProductController::class, 'storeEtalase']);
Route::delete('/product/etalase/delete', [ProductController::class, 'deleteEtalase']);
Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    $role = request()->query('role', 'member'); // Default to member

    $categories = \App\Models\Category::all();
    
    if ($categories->isEmpty()) {
        $defaultCategories = [
            ['name' => 'Elektronik', 'count' => 125, 'icon' => 'assets/earphone.png', 'bg' => 'rgba(0, 176, 80, 0.08)'],
            ['name' => 'Gadget', 'count' => 182, 'icon' => 'assets/hp.png', 'bg' => 'rgba(0, 176, 80, 0.08)'],
            ['name' => 'Server', 'count' => 87, 'icon' => 'assets/server.png', 'bg' => 'rgba(0, 176, 80, 0.08)'],
            ['name' => 'Proyektor', 'count' => 31, 'icon' => 'assets/infokus.png', 'bg' => 'rgba(0, 176, 80, 0.08)'],
            ['name' => 'Laptop', 'count' => 65, 'icon' => 'assets/laptop.png', 'bg' => 'rgba(0, 176, 80, 0.08)'],
            ['name' => 'Kamera', 'count' => 29, 'icon' => 'assets/camera.png', 'bg' => 'rgba(0, 176, 80, 0.08)'],
            ['name' => 'Komputer PC', 'count' => 48, 'icon' => 'assets/pc.png', 'bg' => 'rgba(0, 176, 80, 0.08)'],
        ];
        foreach ($defaultCategories as $cat) {
            \App\Models\Category::create($cat);
        }
        $categories = \App\Models\Category::all();
    }

    $products = Product::orderBy('created_at', 'desc')->get();

    $features = [
        [
            'title' => 'Manajemen Stok Realtime',
            'desc' => 'Pantau pergerakan barang antar gudang dengan akurat',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 24px; height: 24px;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>'
        ],
        [
            'title' => 'Pengiriman & Distribusi',
            'desc' => 'Integrasi jadwal pengiriman ke berbagai cabang',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 24px; height: 24px;"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125a1.125 1.125 0 001.125-1.125V9.75M8.25 18.75h7.5M12 18.75V14.25m-9 0h18M18 14.25h3v-2.25a2.25 2.25 0 00-2.25-2.25H18m0 4.5V9.75m0 0l-2.25-3h-4.5m4.5 3h-4.5m0 0V4.5A2.25 2.25 0 009 2.25H3.75a2.25 2.25 0 00-2.25 2.25v9" /></svg>'
        ],
        [
            'title' => 'Laporan Transparan',
            'desc' => 'Akses laporan inventaris dan nilai aset secara detail',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 24px; height: 24px;"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>'
        ],
        [
            'title' => 'Support Internal',
            'desc' => 'Dukungan teknis tim IT 24/7',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 24px; height: 24px;"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" /></svg>'
        ]
    ];

    $steps = [
        [
            'title' => 'Input Barang',
            'desc' => 'Admin Gudang mencatat stok masuk ke dalam sistem',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>'
        ],
        [
            'title' => 'Pengecekan Kualitas',
            'desc' => 'Tim QA melakukan inspeksi standar barang (Grade A/B/C)',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
        ],
        [
            'title' => 'Penyimpanan',
            'desc' => 'Alokasi produk ke rak atau gudang spesifik',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>'
        ],
        [
            'title' => 'Distribusi / Katalog',
            'desc' => 'Barang siap dipasarkan oleh Tim Sales / Reseller',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" /></svg>'
        ],
        [
            'title' => 'Pencatatan Keluar',
            'desc' => 'Update stok secara real-time saat produk terjual',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" /></svg>'
        ]
    ];

    // $testimonials removed for ERP context

    $banners = \App\Models\Banner::all()->keyBy('placement');
    return view('home', compact('categories', 'products', 'features', 'steps', 'role', 'banners'));
});

// Duplicate routes removed for /seller and /product/form

use App\Http\Controllers\OrderController;

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/export', [OrderController::class, 'export']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::post('/orders/{id}/status', [OrderController::class, 'updateStatus']);
Route::post('/checkout/submit', [OrderController::class, 'store']);
Route::get('/member/prospek', [OrderController::class, 'history']);

Route::get('/product/detail', function () {
    $role = request()->query('role', 'member');
    $id = request()->query('id', 1);
    $products = Product::orderBy('created_at', 'desc')->get();
    $product = collect($products)->firstWhere('id', (int)$id) ?? $products[0];
    
    return view('product_detail', compact('product', 'role'));
});

use App\Http\Controllers\BannerController;

Route::get('/settings/banner', [BannerController::class, 'index']);
Route::post('/settings/banner', [BannerController::class, 'update']);

use App\Http\Controllers\CategoryController;

Route::get('/settings/category', [CategoryController::class, 'index']);
Route::post('/settings/category', [CategoryController::class, 'update']);

use App\Http\Controllers\MitraController;

Route::post('/login/submit', [MitraController::class, 'login']);
Route::get('/mitra', [MitraController::class, 'index']);
Route::post('/mitra/register', [MitraController::class, 'store']);
Route::post('/mitra/{id}/approve', [MitraController::class, 'approve']);
Route::post('/mitra/{id}/reject', [MitraController::class, 'reject']);
Route::delete('/mitra/{id}/delete', [MitraController::class, 'destroy']);

Route::get('/cart', function () {
    $role = request()->query('role', 'member');
    return view('cart', compact('role'));
});

Route::get('/checkout', function () {
    $role = request()->query('role', 'member');
    return view('checkout', compact('role'));
});

Route::get('/pengajuan', function () {
    $role = request()->query('role', 'member');
    return view('pengajuan', compact('role'));
});


