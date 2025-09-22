<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/our-work', function () {
    return view('our-work');
})->name('our-work');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/free-quote', function () {
    return view('free-quote');
})->name('free-quote');


// Dropdown Routes
Route::get('/solar', function () {
    return view('solar');
})->name('solar');

Route::get('/cctv-services', function () {
    return view('cctv-services');
})->name('cctv-services');

Route::get('/inverter-services', function () {
    return view('inverter-services');
})->name('inverter-services');

Route::get('/electrical-services', function () {
    return view('electrical-services');
})->name('electrical-services');

Route::get('/maintenance-services', function () {
    return view('maintenance-services');
})->name('maintenance-services');

Route::get('/networking-services', function () {
    return view('networking-services');
})->name('networking-services');



Route::get('/home', [HomeController::class, 'index'])->name('home');


// For form submission

use App\Http\Controllers\FeedbackController;

Route::post('/feedback/send', [FeedbackController::class, 'send'])->name('feedback.send');

use Illuminate\Support\Facades\Mail;

Route::get('/test-mail', function () {
    Mail::raw('Thunder fire this code', function ($message) {
        $message->to('2022dexy@gmail.com') // your email
                ->subject('Laravel Mail Test');
    });

    return '✅ Test email has been sent (check your inbox or spam folder)';
});