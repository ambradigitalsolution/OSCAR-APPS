<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop ASUS ROG Zephyrus G14 Ryzen 9 16GB 1TB SSD',
                'price' => 16500000,
                'stock' => 15,
                'status' => 'Aktif',
                'sales' => 125,
                'views' => 2994,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'Laptop gaming dengan performa tinggi.',
                'images' => ['assets/laptop.png']
            ],
            [
                'name' => 'iPhone 13 128GB Garansi Resmi iBox Indonesia',
                'price' => 8750000,
                'stock' => 96,
                'status' => 'Aktif',
                'sales' => 250,
                'views' => 6400,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'Garansi resmi iBox Indonesia.',
                'images' => ['assets/hp.png']
            ],
            [
                'name' => 'Canon EOS M50 Mark II Mirrorless Camera Body Only',
                'price' => 6250000,
                'stock' => 73,
                'status' => 'Aktif',
                'sales' => 89,
                'views' => 4567,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'Kamera mirrorless terbaik untuk vlogging.',
                'images' => ['assets/camera.png']
            ],
            [
                'name' => 'Smart TV LED 4K Ultra HD 55 inch Frameless Design',
                'price' => 3500000,
                'stock' => 0,
                'status' => 'Habis',
                'sales' => 45,
                'views' => 1876,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'TV LED 4K.',
                'images' => ['assets/tv.png']
            ],
            [
                'name' => 'TWS Bluetooth Earphone v5.3 Noise Cancelling',
                'price' => 250000,
                'stock' => 508,
                'status' => 'Aktif',
                'sales' => 1240,
                'views' => 9800,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'TWS dengan noise cancelling.',
                'images' => ['assets/earphone.png']
            ],
            [
                'name' => 'Tablet Android 10 Inch RAM 4GB ROM 64GB',
                'price' => 2100000,
                'stock' => 230,
                'status' => 'Aktif',
                'sales' => 678,
                'views' => 3210,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'Tablet android murah.',
                'images' => ['assets/tablet.png']
            ],
            [
                'name' => 'Server Rack Dell PowerEdge R740 2U 32GB RAM',
                'price' => 42000000,
                'stock' => 5,
                'status' => 'Aktif',
                'sales' => 12,
                'views' => 890,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'Server Dell PowerEdge R740.',
                'images' => ['assets/server.png']
            ],
            [
                'name' => 'Kursi Kantor Ergonomis Mesh High Back Adjustable',
                'price' => 1250000,
                'stock' => 42,
                'status' => 'Aktif',
                'sales' => 310,
                'views' => 5430,
                'category' => 'Rumah Tangga',
                'kondisi' => 'Baru',
                'description' => 'Kursi kantor ergonomis.',
                'images' => ['assets/kursi.png']
            ],
            [
                'name' => 'Proyektor Epson EB-X51 XGA 3LCD 3800 Lumens',
                'price' => 5900000,
                'stock' => 18,
                'status' => 'Aktif',
                'sales' => 34,
                'views' => 1560,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'Proyektor Epson terang.',
                'images' => ['assets/infokus.png']
            ],
            [
                'name' => 'Komputer PC Rakitan Intel Core i5 RAM 8GB',
                'price' => 4350000,
                'stock' => 0,
                'status' => 'Habis',
                'sales' => 67,
                'views' => 2100,
                'category' => 'Elektronik',
                'kondisi' => 'Baru',
                'description' => 'PC Rakitan.',
                'images' => ['assets/pc.png']
            ],
        ];

        foreach ($products as $prod) {
            Product::create($prod);
        }
    }
}
