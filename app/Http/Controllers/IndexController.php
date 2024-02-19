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
        // Validate the request data if needed

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];

        // Redirect back with success message
        return view('contactcont')->with($data);

        // send mail
        Mail::to('anjorin199@gmail.com')->send(new SendMail($data));
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
        return redirect()->route('contactcont', $data);
    }
}
