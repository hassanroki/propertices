<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Index
        $user           = Auth::user();
        $aboutUs        = AboutUs::all();
        $count          = $aboutUs->count();
        return view('admin.about_us', compact(['user', 'aboutUs', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Create
        $user           = Auth::user();
        return view('admin.about_us_form', ['user' => $user, 'about' => new AboutUs()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store
        $validated = $request->validate([
            'name'              => 'required|string|min:3|max:50|not_in:admin,password',
            'designation'       => 'required|string|min:3|max:50|alpha',
            'company_name'      => 'required|string|min:3|max:255',
            'sub_company'       => 'nullable|string|min:3|max:255',
            'title'             => 'required|string|min:3|max:255',
            'description_one'   => 'required|string|min:3',
            'description_two'   => 'nullable|string|min:3',
            'description_three' => 'nullable|string|min:3',
            'img'               => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $file->store('uploads', 'public'); // Store the file in the 'public/uploads' directory
            $validated['img'] = $path; // Add the file path to the validated data
        }

        AboutUs::create($validated);

        return redirect()->route('about.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $about)
    {
        //Edit
        $user           = Auth::user();
        return view('admin.about_us_form', compact(['user', 'about']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $about)
{
    // Validate input
    $validated = $request->validate([
        'name'              => 'required|string|min:3|max:50|not_in:admin,password',
        'designation'       => 'required|string|min:3|max:50|alpha',
        'company_name'      => 'required|string|min:3|max:255',
        'sub_company'       => 'nullable|string|min:3|max:255',
        'title'             => 'required|string|min:3|max:255',
        'description_one'   => 'required|string|min:3',
        'description_two'   => 'nullable|string|min:3',
        'description_three' => 'nullable|string|min:3',
        'img'               => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('img')) {
        // Check if there is an existing image and delete it
        if ($about->img && Storage::disk('public')->exists($about->img)) {
            Storage::disk('public')->delete($about->img);
        }

        // Store the new image
        $file = $request->file('img');
        $path = $file->store('uploads', 'public'); // Store the file in the 'public/uploads' directory
        $validated['img'] = $path;
    }

    // Update the AboutUs instance with validated data
    $about->update($validated);

    return redirect()->route('about.index')->with('success', 'Updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $about)
    {
        // Check if there is an existing about image and delete it
        if ($about->img && Storage::disk('public')->exists($about->img)) {
            Storage::disk('public')->delete($about->img);
        }

        // Delete the about record from the database
        $about->delete();

        return redirect()->route('about.index')->with('success', 'about deleted successfully');
    }
}
