<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function sendContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        try {
            Mail::to('fawadgul311@gmail.com')->send(new ContactMail($details));
            return back()->with('success', 'Thank you for contacting us!');
        } catch (\Exception $e) {
            return back()->with('error', 'There was an error sending your message: ' . $e->getMessage());
        }
    }
}
