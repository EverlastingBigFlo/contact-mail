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
}