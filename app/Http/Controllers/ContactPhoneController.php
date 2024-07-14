<?php

namespace App\Http\Controllers;

use App\Models\ContactPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Index
        $user           = Auth::user();
        $contactPhones  = ContactPhone::all();
        $count          = $contactPhones->count();

        return view('admin.contact_phone', compact(['user', 'contactPhones', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        $user           = Auth::user();

        return view('admin.contact_phone_form', ['user' => $user, 'contact_phone' => new ContactPhone()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store
        $validated              = $request->validate([
            'phone_num_one'     => 'required|regex:/^01[0-9]{9}$/',
            'phone_num_two'     => 'nullable|regex:/^01[0-9]{9}$/',
            'phone_num_icon'    => 'nullable|string',
            'email'             => 'required|string|email',
            'email_icon'        => 'nullable|string',
            'website_link'      => 'nullable|string',
            'address_one'       => 'required|string',
            'address_two'       => 'nullable|string',
            'address_icon'      => 'nullable|string',
        ]);

        ContactPhone::create($validated);

        return redirect()->route('contact-phone.index')->with('success', 'Created Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactPhone $contact_phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactPhone $contact_phone)
    {
        // Edit
        $user           = Auth::user();
        
        return view('admin.contact_phone_form', compact(['user', 'contact_phone']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactPhone $contact_phone)
    {
        // Update
        $validated              = $request->validate([
            'phone_num_one'     => 'required|regex:/^01[0-9]{9}$/',
            'phone_num_two'     => 'nullable|regex:/^01[0-9]{9}$/',
            'phone_num_icon'    => 'nullable|string',
            'email'             => 'required|string|email',
            'email_icon'        => 'nullable|string',
            'website_link'      => 'nullable|string',
            'address_one'       => 'required|string',
            'address_two'       => 'nullable|string',
            'address_icon'      => 'nullable|string',
        ]);

        $contact_phone->update($validated);

        return redirect()->route('contact-phone.index')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactPhone $contact_phone)
    {
        // Delete
        $contact_phone->delete();

        return redirect()->route('contact-phone.index')->with('Deleted Success');
    }
}
