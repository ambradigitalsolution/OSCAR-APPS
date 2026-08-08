<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->query('role', 'member');
        
        // Hanya owner yang boleh mengakses halaman persetujuan mitra
        if (strtolower($role) !== 'owner') {
            return redirect('/dashboard?role=' . $role);
        }

        // Ambil semua data mitra, urutkan yang pending di atas
        $mitras = Mitra::orderByRaw("CASE WHEN status = 'pending' THEN 0 ELSE 1 END")
            ->orderBy('created_at', 'desc')
            ->get();

        return view('mitra_approval', compact('mitras', 'role'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'required|string|max:20',
            'mitra' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        Mitra::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->whatsapp,
            'business_name' => $request->mitra,
            'address' => '-', // No address in register form
            'password' => bcrypt($request->password),
            'status' => 'pending',
        ]);

        return response()->json(['success' => true]);
    }

    public function approve(Request $request, $id)
    {
        $role = $request->query('role', 'member');
        if (strtolower($role) !== 'owner') {
            return response()->json(['success' => false, 'error' => 'Unauthorized'], 403);
        }

        $mitra = Mitra::findOrFail($id);
        $mitra->status = 'approved';
        $mitra->save();

        return response()->json(['success' => true]);
    }

    public function reject(Request $request, $id)
    {
        $role = $request->query('role', 'member');
        if (strtolower($role) !== 'owner') {
            return response()->json(['success' => false, 'error' => 'Unauthorized'], 403);
        }

        $mitra = Mitra::findOrFail($id);
        $mitra->status = 'rejected';
        $mitra->save();

        return response()->json(['success' => true]);
    }

    public function destroy(Request $request, $id)
    {
        $role = $request->query('role', 'member');
        if (strtolower($role) !== 'owner') {
            return response()->json(['success' => false, 'error' => 'Unauthorized'], 403);
        }

        $mitra = Mitra::findOrFail($id);
        $mitra->delete();

        return response()->json(['success' => true]);
    }
}
