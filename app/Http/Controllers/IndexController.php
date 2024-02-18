<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }

    public function contactCommand(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        // Retrieve form data
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
    
        // Send email
        Mail::to('anjorin199@gmail.com')->send(new SendMail($name, $email, $message));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
    
}


