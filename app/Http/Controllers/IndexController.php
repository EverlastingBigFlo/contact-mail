<?php

namespace App\Http\Controllers;

use App\Jobs\MailSender;
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
    
    

    // to get the submit request for sent to email
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
       dispatch(new MailSender($data));

        return view('thankyou');

    }
    

    // to display register and login page
    public function registerandlogin()
    {
        return view('registerandlogin');
    }
    
}
