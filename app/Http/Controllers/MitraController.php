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
            'password' => $request->password,
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

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if ($email === 'owner@oscar.com' && $password === 'admin123') {
            return response()->json([
                'success' => true, 
                'role' => 'owner', 
                'user' => ['name' => 'Owner', 'email' => 'owner@oscar.com', 'role' => 'owner', 'mitra' => 'Oscar Pusat', 'whatsapp' => '-']
            ]);
        }

        if ($email === 'member@oscar.com' && $password === 'user123') {
            return response()->json([
                'success' => true, 
                'role' => 'member', 
                'user' => ['name' => 'Member', 'email' => 'member@oscar.com', 'role' => 'member', 'mitra' => 'Mitra Default', 'whatsapp' => '-']
            ]);
        }

        $mitra = Mitra::where('email', $email)->first();
        if ($mitra) {
            if ($mitra->password !== $password) {
                return response()->json(['success' => false, 'message' => 'Password salah!']);
            }
            if ($mitra->status !== 'approved') {
                return response()->json(['success' => false, 'message' => 'Akun mitra Anda belum disetujui.']);
            }
            return response()->json([
                'success' => true, 
                'role' => 'member', 
                'user' => [
                    'name' => $mitra->name, 
                    'email' => $mitra->email, 
                    'role' => 'member', 
                    'mitra' => $mitra->business_name, 
                    'whatsapp' => $mitra->phone
                ]
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Email atau password salah!']);
    }
}
