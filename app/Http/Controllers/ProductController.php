<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Etalase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $role = strtolower($request->query('role', 'member'));
        $products = Product::orderBy('created_at', 'desc')->get();
        
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
        
        $categories = Category::all();
        $etalases = Etalase::all();

        return view('product_form', compact('role', 'product', 'categories', 'etalases'));
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
                $data['images'] = $imagePaths;
                $product->update($data);
                return response()->json(['success' => true, 'message' => 'Produk berhasil diubah', 'id' => $product->id]);
            }
        }
        
        $data['images'] = $imagePaths;
        $product = Product::create($data);
        return response()->json(['success' => true, 'message' => 'Produk berhasil ditambahkan', 'id' => $product->id]);
    }

    public function toggleStatus(Request $request, $id)
    {
        $role = strtolower($request->query('role', 'member'));
        if ($role !== 'owner') {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Produk tidak ditemukan'], 404);
        }

        $status = $request->input('status');
        if (in_array($status, ['Aktif', 'Nonaktif'])) {
            $product->status = $status;
            $product->save();
            return response()->json(['success' => true, 'message' => 'Status produk berhasil diubah']);
        }

        return response()->json(['error' => 'Status tidak valid'], 400);
    }

    public function destroy(Request $request, $id)
    {
        $role = strtolower($request->query('role', 'member'));
        if ($role !== 'owner') {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['success' => true, 'message' => 'Produk berhasil dihapus']);
        }

        return response()->json(['error' => 'Produk tidak ditemukan'], 404);
    }

    public function storeCategory(Request $request)
    {
        $role = strtolower($request->query('role', 'member'));
        if ($role !== 'owner') return response()->json(['error' => 'Unauthorized'], 403);

        $request->validate(['name' => 'required|string|max:255']);
        $category = Category::create(['name' => $request->name]);
        return response()->json(['success' => true, 'category' => $category]);
    }

    public function deleteCategory(Request $request)
    {
        $role = strtolower($request->query('role', 'member'));
        if ($role !== 'owner') return response()->json(['error' => 'Unauthorized'], 403);

        $request->validate(['name' => 'required|string']);
        Category::where('name', $request->name)->delete();
        return response()->json(['success' => true]);
    }

    public function storeEtalase(Request $request)
    {
        $role = strtolower($request->query('role', 'member'));
        if ($role !== 'owner') return response()->json(['error' => 'Unauthorized'], 403);

        $request->validate(['name' => 'required|string|max:255']);
        $etalase = Etalase::create(['name' => $request->name]);
        return response()->json(['success' => true, 'etalase' => $etalase]);
    }

    public function deleteEtalase(Request $request)
    {
        $role = strtolower($request->query('role', 'member'));
        if ($role !== 'owner') return response()->json(['error' => 'Unauthorized'], 403);

        $request->validate(['name' => 'required|string']);
        Etalase::where('name', $request->name)->delete();
        return response()->json(['success' => true]);
    }
}
