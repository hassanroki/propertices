<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Index
        $user           = Auth::user();
        $banners        = Banner::all();
        $count          = $banners->count();
        return view('admin.banner', compact('user', 'banners', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Create
        $user           = Auth::user();
        return view('admin.banner_form', ['user' => $user, 'banner' => new Banner()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Store
        $request->validate([
            'item'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $banner = new Banner();

        if ($request->hasFile('item')) {
            $file = $request->file('item');
            $path = $file->store('uploads', 'public'); // Store the file in the 'public/uploads' directory
            $banner->item = $path;
        }

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //Edit
        $user       = Auth::user();
        return view('admin.banner_form', compact('user', 'banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //Update
        $request->validate([
            'item'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('item')) {
            // Check if there is an existing logo image and delete it
            if ($banner->item && Storage::disk('public')->exists($banner->item)) {
                Storage::disk('public')->delete($banner->item);
            }

            // Store the new logo image
            $file = $request->file('item');
            $path = $file->store('uploads', 'public'); // Store the file in the 'public/uploads' directory
            $banner->item = $path;
        }

        // Update the logo URL
        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        // Check if there is an existing banner image and delete it
        if ($banner->item && Storage::disk('public')->exists($banner->item)) {
            Storage::disk('public')->delete($banner->item);
        }

        // Delete the banner record from the database
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully');
    }
}
