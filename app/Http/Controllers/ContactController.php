<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
  
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

    
        Mail::to('niaruma20@gmail.com')->send(new ContactMail($validatedData));

     
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
