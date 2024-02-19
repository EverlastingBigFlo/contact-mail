<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
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
        // $data=['mymessage'=>'Hello, your one time password is ' .rand(100000,900000), 'username'=>'Samuel'];


        // Send email
        Mail::to('anjorin199@gmail.com')->send(new SendMail($request));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
