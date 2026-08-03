<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $role = strtolower($request->query('role', 'member'));
        $products = Product::all();
        
        // This is usually for Seller Center
        return view('seller', compact('products', 'role'));
    }

    public function form(Request $request)
    {
        $role = strtolower($request->query('role', 'member'));
        if ($role !== 'owner') {
            return redirect('/');
        }

        $id = $request->query('id');
        $product = null;
        if ($id) {
            $product = Product::find($id);
        }

        return view('product_form', compact('role', 'product'));
    }

    public function store(Request $request)
    {
        $role = strtolower($request->query('role', 'member'));
        if ($role !== 'owner') {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string',
            'etalase' => 'nullable|string',
            'kondisi' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'nullable|integer',
            'stock' => 'nullable|integer',
            'images' => 'nullable|array',
            'status' => 'nullable|string',
        ]);

        // Process Base64 images and save to files
        $imagePaths = [];
        if (!empty($data['images'])) {
            foreach ($data['images'] as $base64Image) {
                if (str_starts_with($base64Image, 'data:image')) {
                    $imageParts = explode(";base64,", $base64Image);
                    $imageTypeAux = explode("image/", $imageParts[0]);
                    $imageType = $imageTypeAux[1];
                    $imageBase64 = base64_decode($imageParts[1]);
                    $fileName = 'assets/products/' . uniqid() . '.' . $imageType;
                    
                    if (!File::exists(public_path('assets/products'))) {
                        File::makeDirectory(public_path('assets/products'), 0755, true);
                    }
                    
                    file_put_contents(public_path($fileName), $imageBase64);
                    $imagePaths[] = $fileName;
                } else {
                    $imagePaths[] = $base64Image; // It's already a URL
                }
            }
        }
        $id = $request->input('id');
        if ($id) {
            $product = Product::find($id);
            if ($product) {
                if (empty($data['images'])) {
                    $data['images'] = $product->images;
                } else {
                    $data['images'] = $imagePaths;
                }
                $product->update($data);
                return response()->json(['success' => true, 'message' => 'Produk berhasil diubah', 'id' => $product->id]);
            }
        }
        
        $data['images'] = $imagePaths;
        $product = Product::create($data);
        return response()->json(['success' => true, 'message' => 'Produk berhasil ditambahkan', 'id' => $product->id]);
    }
}
