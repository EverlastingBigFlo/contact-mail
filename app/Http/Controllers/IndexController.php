<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Auth\Events\Validated;
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
        // Validate data from form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        // Get the validated data
        $data = $request->all('name', 'email', 'message');
    
        // Redirect to contactcont route with the data
        Mail::to('anjorin199@gmail.com')->send(new SendMail($data));
        return view('contactcont');

    }
    
    // public function contactcont()
    // {
    //     return view('contactcont');
    // }

    
}
