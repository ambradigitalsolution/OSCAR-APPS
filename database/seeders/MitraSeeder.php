<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mitra;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mitra::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'phone' => '081234567890',
            'business_name' => 'Toko Elektronik Maju',
            'address' => 'Jl. Merdeka No. 10, Jakarta',
            'status' => 'pending'
        ]);

        Mitra::create([
            'name' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'phone' => '08987654321',
            'business_name' => 'Berkah Gadget',
            'address' => 'Jl. Sudirman No. 45, Bandung',
            'status' => 'approved'
        ]);

        Mitra::create([
            'name' => 'Andi Setiawan',
            'email' => 'andi@example.com',
            'phone' => '085511223344',
            'business_name' => 'Komputer Plus',
            'address' => 'Jl. Gajah Mada No. 8, Surabaya',
            'status' => 'rejected'
        ]);
    }
}
