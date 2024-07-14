<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Index
        $user           = Auth::user();
        $footers        = Footer::all();
        $count          = $footers->count();

        return view('admin.footers', compact(['user', 'footers', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        $user           = Auth::user();

        return view('admin.footer_form', ['user' => $user, 'footer' => new Footer()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store
        $validated              = $request->validate([
            'footer_text_one'   => 'required|string|min:3|max:255',
            'footer_text_two'   => 'required|string|min:3|max:255',
            'footer_text_three' => 'required|string|min:3|max:255',
        ]);

        Footer::create($validated);

        return redirect()->route('footer.index')->with('success', 'Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        // Edit
        $user           = Auth::user();

        return view('admin.footer_form', compact(['user', 'footer']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footer $footer)
    {
        // Update
        $validated              = $request->validate([
            'footer_text_one'   => 'required|string|min:3|max:255',
            'footer_text_two'   => 'required|string|min:3|max:255',
            'footer_text_three' => 'required|string|min:3|max:255',
        ]);

        $footer->update($validated);

        return redirect()->route('footer.index')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        // Delete
        $footer->delete();

        return redirect()->route('footer.index')->with('success', 'Deleted Success');
    }
}
