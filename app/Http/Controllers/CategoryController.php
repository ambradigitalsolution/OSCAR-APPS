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
                    if ($request->hasFile("categories.{$index}.icon")) {
                        $icon = $request->file("categories.{$index}.icon");
                        $iconName = time() . '_' . $index . '.' . $icon->getClientOriginalExtension();
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
