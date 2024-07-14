<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Index
        $user           = Auth::user();
        $services       = Service::all();
        $count          = $services->count();
        return view('admin.services', compact(['user', 'services', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Create
        $user           = Auth::user();
        return view('admin.services_form', ['user' => $user, 'service' => new Service()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Store
        $validated = $request->validate([
            'title'             => 'required|min:3|string',
            'title_url'         => 'nullable|string',
            's_paragraph'       => 'required|min:3|string',
            'img'               => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_url'           => 'nullable|string'
        ]);

        if ($request->hasFile('img')) {
            $file               = $request->file('img');
            $path               = $file->store('uploads', 'public');
            $validated['img']   = $path;
        }

        Service::create($validated);
        return redirect()->route('service.index')->with('success', 'Service Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // Edit
        $user           = Auth::user();
        return view('admin.services_form', compact(['user', 'service']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // Update
        $validated = $request->validate([
            'title'             => 'required|min:3|string',
            'title_url'         => 'nullable|string',
            's_paragraph'       => 'required|min:3|string',
            'img'               => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_url'           => 'nullable|string'
        ]);

        if ($request->hasFile('img')) {
            // Check if there is an existing image and delete it
            if ($service->img && Storage::disk('public')->exists($service->img)) {
                Storage::disk('public')->delete($service->img);
            }

            // Store the new image
            $file   = $request->file('img');
            $path   = $file->store('uploads', 'public');
            $validated['img']   = $path;
        }

        $service->update($validated);
        return redirect()->route('service.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //Delete
        // Check if there is an existing about image and delete it
        // if ($about->img && Storage::disk('public')->exists($about->img)) {
        //     Storage::disk('public')->delete($about->img);
        // }

        if($service->img && Storage::disk('public')->exists($service->img)){
            Storage::disk('public')->delete($service->img);
        }

        $service->delete();

        return redirect()->route('service.index')->with('success', 'Deleted Success');

    }
}
