<?php

namespace App\Http\Controllers;

use App\Models\ContactIcon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactIconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Index
        $user               = Auth::user();
        $contactIcon        = ContactIcon::all();
        $count              = $contactIcon->count();
        return view('admin.contact_icon', compact(['user', 'contactIcon', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Create
        $user           = Auth::user();
        return view('admin.contact_icon_form', ['user' => $user, 'contact_icon' => new ContactIcon()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store
        $request->validate([
            'icon'          => 'required|string',
            'icon_url'      => 'nullable|string',
            'title'         => 'required|string'
        ]);

        ContactIcon::create($request->all());
        return redirect()->route('contact-icon.index')->with('success', 'Contact Icon Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactIcon $contactIcon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactIcon $contact_icon)
    {
        //Edit
        $user           = Auth::user();
        return view('admin.contact_icon_form', compact('user', 'contact_icon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactIcon $contact_icon)
    {
        //Update
        $request->validate([
            'icon'          => 'required|string',
            'icon_url'      => 'nullable|string',
            'title'         => 'required|string',
        ]);

        $contact_icon->update($request->all());
        return redirect()->route('contact-icon.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactIcon $contact_icon)
    {
        // Delete
        $contact_icon->delete();
        return redirect()->route('contact-icon.index')->with('success', 'Deleted Successfully');
    }
}
