<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // set rules here
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        return "Thank you for contacting us";
    }
}
