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
}
