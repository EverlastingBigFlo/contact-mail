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
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('anjorin199@gmail.com')->send(new SendMail($request));


        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}


