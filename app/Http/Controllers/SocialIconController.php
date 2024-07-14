<?php

namespace App\Http\Controllers;

use App\Models\SocialIcon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialIconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialIcons = SocialIcon::all();
        $user = Auth::user();
        $count = $socialIcons->count();
        return view('admin.social_icon', compact('socialIcons', 'user', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.social_icon_form', ['social' => new SocialIcon(), 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon'      => 'required|string',
            'icon_url'  => 'required|string',
        ]);

        SocialIcon::create($request->all());
        return redirect()->route('social.index')->with('success', 'Social Icon added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialIcon $socialIcon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialIcon $social)
    {
        $user = Auth::user();
        return view('admin.social_icon_form', compact('social', 'user'));
    }
    
    


    public function update(Request $request, SocialIcon $social)
    {
        $request->validate([
            'icon' => 'sometimes|required|string',
            'icon_url' => 'sometimes|required|string',
        ]);

        $social->update($request->all());

        return redirect()->route('social.index')->with('success', 'Social Icon updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialIcon $social)
    {
        $social->delete();

        return redirect()->route('social.index')->with('success', 'Deleted successfully.');
    }
}
