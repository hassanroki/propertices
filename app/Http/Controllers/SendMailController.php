<?php

namespace App\Http\Controllers;

use App\Models\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendMailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Index
        $user           = Auth::user();
        $sendMails      = SendMail::all();
        $count          = $sendMails->count();

        return view('admin.send_mails', compact(['user', 'sendMails', 'count']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        return view('index', ['send_mail' => new SendMail()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store
        $validated          = $request->validate([
            'email'         => 'required|email|max:255',
        ]);

        SendMail::create($validated);

        return redirect()->route('index')->with('successSend', 'Sent Mail Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(SendMail $sendMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SendMail $sendMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SendMail $sendMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SendMail $send_mail)
    {
        // Delete
        $send_mail->delete();
        return redirect()->route('send-mail.index')->with('success', 'Deleted Success');
    }
}
