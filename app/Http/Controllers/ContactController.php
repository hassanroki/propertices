<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Index
        $user           = Auth::user();
        $contacts       = Contact::all();
        $count          = $contacts->count();

        return view('admin.contact', compact(['user', 'contacts', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        return view('index', ['contact' => new Contact()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store
        $validated          = $request->validate([
            'name'          => 'required|string|min:3|max:50',
            'email'         => 'required|string|email|max:255',
            'phone'         => 'required|regex:/^01[0-9]{9}$/',
            'website_url'   => 'nullable|url',
            'message'       => 'nullable|string',

        ]);

        Contact::create($validated);

        return redirect()->route('index')->with('success', 'Message Successfully Sent');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        // Edit
        $user           = Auth::user();
        return view('admin.contact_form', compact(['user', 'contact']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        // Update
        $validated          = $request->validate([
            'name'          => 'required|string|min:3|max:50',
            'email'         => 'required|string|email|max:255',
            'phone'         => 'required|regex:/^01[0-9]{9}$/',
            'website_url'   => 'nullable|url',
            'message'       => 'nullable|string',

        ]);

        $contact->update($validated);

        return redirect()->route('contact.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        // Delete
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Deleted Successfully');
    }
}
