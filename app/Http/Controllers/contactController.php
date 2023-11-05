<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }



    public function sendContactForm(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];
    
        // Replace 'your-email@example.com' with your actual email address
        Mail::raw($data['message'], function ($message) use ($data) {
            $message->to('your-email@example.com')
                ->subject('Contact Form Submission')
                ->from($data['email'], $data['name']);
        });
    
        return redirect('/contact')->with('success', 'Your message has been sent!');
    }
    
    
}
