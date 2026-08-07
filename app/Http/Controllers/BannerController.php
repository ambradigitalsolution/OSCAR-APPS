<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        if (strtolower($request->query('role', 'Member')) !== 'owner') {
            return redirect('/');
        }

        $banners = Banner::all()->keyBy('placement');

        return view('banner_settings', compact('banners'));
    }

    public function update(Request $request)
    {
        if (strtolower($request->query('role', 'Member')) !== 'owner') {
            return redirect('/');
        }

        $data = $request->input('banners', []);

        foreach ($data as $placement => $fields) {
            $bannerData = [
                'badge' => $fields['badge'] ?? null,
                'title_1' => $fields['title_1'] ?? null,
                'title_2' => $fields['title_2'] ?? null,
                'description' => $fields['description'] ?? null,
            ];

            if (!empty($fields['delete_image'])) {
                $bannerData['image'] = null;
            } elseif ($request->hasFile("banners.{$placement}.image")) {
                $image = $request->file("banners.{$placement}.image");
                $imageName = time() . '_' . $placement . '.' . $image->getClientOriginalExtension();
                
                if (!File::exists(public_path('assets/banners'))) {
                    File::makeDirectory(public_path('assets/banners'), 0755, true);
                }
                
                $image->move(public_path('assets/banners'), $imageName);
                $bannerData['image'] = 'assets/banners/' . $imageName;
            }

            Banner::updateOrCreate(
                ['placement' => $placement],
                $bannerData
            );
        }

        return redirect()->back()->with('success', 'Pengaturan banner berhasil disimpan!');
    }
}
