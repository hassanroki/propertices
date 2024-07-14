<?php

namespace App\Http\Controllers;

use App\Models\MainMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Index
        $user           = Auth::user();
        $mainMenus      = MainMenu::all();
        $count          = $mainMenus->count();
        return view('admin.main_menu', compact(['user', 'mainMenus', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Create
        $user           = Auth::user();
        return view('admin.main_menu_form', ['main_menu' => new MainMenu(), 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store
        $request->validate([
            'item_url'      => 'nullable|string',
            'item'          => 'required|string'
        ]);

        MainMenu::create($request->all());
        return redirect()->route('main-menu.index')->with('success', 'Add New Menu Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MainMenu $main_menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainMenu $main_menu)
    {
        //Edit
        $user           = Auth::user();
        return view('admin.main_menu_form', compact('user', 'main_menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainMenu $main_menu)
    {
        //Update
        $request->validate([
            'item_url'      => 'nullable|string',
            'item'          => 'required|string'
        ]);

        $main_menu->update($request->all());
        return redirect()->route('main-menu.index')->with('Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainMenu $main_menu)
    {
        // Delete
        $main_menu->delete();
        return redirect()->route('main-menu.index')->with('success', 'Delete Successfully');
    }
}
