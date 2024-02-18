<?php
namespace App\Http\Controllers;

use App\Http\Controllers\IndexController;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// to load the contact us page
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');


// to get the contact us post data
Route::post('/contact', [IndexController::class, 'contactCommand'])->name('contactCommand');



