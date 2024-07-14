<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        // Welcome Table & User Table
        public function index()
        {
            $welcomes = Welcome::all();
            $user = Auth::user();
            $welcomeCount = $welcomes->count();
            return view('admin.welcome', compact(['welcomes', 'user', 'welcomeCount']));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.form', ['welcome' => new Welcome(), 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =         $request->validate([
            'icon'          => 'nullable|string',
            'description'   => 'required|string',
        ]);
    
        Welcome::create($data);
        return redirect()->route('welcome.index')->with('success', 'Welcome added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Welcome $welcome)
    {
        $user = Auth::user();
        return view('admin.form', compact(['welcome', 'user']));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Welcome $welcome)
    {
        $request->validate([
            'icon'          => 'nullable|string',
            'description'   => 'required|string',
        ]);
    
        $welcome->update($request->all());
    
        return redirect()->route('welcome.index')->with('success', 'Welcome updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
