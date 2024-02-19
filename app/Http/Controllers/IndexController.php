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

    public function contactcont(Request $request)
    {
        // Retrieve the data passed from the redirect
        $data = $request->get('data');
        
        // Send mail
        Mail::to('anjorin199@gmail.com')->send(new SendMail($data));
        
        // Render the view with the submitted data
        return view('contactcont', compact('data'));
    }
    
    
    

    public function contactCommand(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        // Get the validated data
        $data = $request->only('name', 'email', 'message');
    
        // Redirect to contactcont route with the data
        return redirect()->route('contactcont', ['data' => $data]);
    }
    

    
}
