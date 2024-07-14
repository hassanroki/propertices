<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Index
        $user       = Auth::user();
        $logos      = Logo::all();
        $count      = $logos->count();
        return view('admin.logo', compact('user', 'logos', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        $user       = Auth::user();
        return view('admin.logo_form', ['logo' => new Logo(),'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo_url' => 'nullable|url',
        ]);

        $logo = new Logo;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $file->store('uploads', 'public'); // Store the file in the 'public/uploads' directory
            $logo->logo = $path;
        }

        $logo->logo_url = $request->logo_url;
        $logo->save();

        return redirect()->route('logo.index')->with('success', 'Logo added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        //Edit
        $user       = Auth::user();
        return view('admin/logo_form', compact(['user', 'logo']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo_url' => 'nullable|url',
        ]);
    
        if ($request->hasFile('logo')) {
            // Check if there is an existing logo image and delete it
            if ($logo->logo && Storage::disk('public')->exists($logo->logo)) {
                Storage::disk('public')->delete($logo->logo);
            }
    
            // Store the new logo image
            $file = $request->file('logo');
            $path = $file->store('uploads', 'public'); // Store the file in the 'public/uploads' directory
            $logo->logo = $path;
        }
    
        // Update the logo URL
        $logo->logo_url = $request->logo_url;
        $logo->save();
    
        return redirect()->route('logo.index')->with('success', 'Logo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
