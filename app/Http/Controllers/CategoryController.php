<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if (strtolower($request->query('role', 'Member')) !== 'owner') {
            return redirect('/');
        }

        $categories = Category::all();
        
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
                Category::create($cat);
            }
            $categories = Category::all();
        }

        return view('category_settings', compact('categories'));
    }

    public function update(Request $request)
    {
        if (strtolower($request->query('role', 'Member')) !== 'owner') {
            return redirect('/');
        }

        $categoriesData = $request->input('categories', []);
        $keepIds = [];

        foreach ($categoriesData as $index => $data) {
            $categoryData = [
                'name' => $data['name'] ?? 'Kategori Baru',
                'count' => $data['count'] ?? 0,
            ];

            if (isset($data['id']) && $data['id']) {
                $category = Category::find($data['id']);
                if ($category) {
                    // Update existing
                    if (!empty($data['delete_image'])) {
                        $categoryData['icon'] = null;
                    } elseif ($request->hasFile("categories.{$index}.icon")) {
                        $icon = $request->file("categories.{$index}.icon");
                        $iconName = time() . '_' . $index . '.' . $icon->getClientOriginalExtension();
                        
                        if (!File::exists(public_path('assets/categories'))) {
                            File::makeDirectory(public_path('assets/categories'), 0755, true);
                        }
                        
                        $icon->move(public_path('assets/categories'), $iconName);
                        $categoryData['icon'] = 'assets/categories/' . $iconName;
                    }
                    $category->update($categoryData);
                    $keepIds[] = $category->id;
                }
            } else {
                // Create new
                if ($request->hasFile("categories.{$index}.icon")) {
                    $icon = $request->file("categories.{$index}.icon");
                    $iconName = time() . '_' . $index . '.' . $icon->getClientOriginalExtension();
                    
                    if (!File::exists(public_path('assets/categories'))) {
                        File::makeDirectory(public_path('assets/categories'), 0755, true);
                    }
                    
                    $icon->move(public_path('assets/categories'), $iconName);
                    $categoryData['icon'] = 'assets/categories/' . $iconName;
                }
                $newCat = Category::create($categoryData);
                $keepIds[] = $newCat->id;
            }
        }

        // Delete categories that are not in the submitted form
        Category::whereNotIn('id', $keepIds)->delete();

        return redirect()->back()->with('success', 'Pengaturan kategori berhasil disimpan!');
    }
}
