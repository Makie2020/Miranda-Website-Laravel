<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomsController;


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
    return view('index');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'create')->name('contact.create');
    Route::post('/contact', 'store')->name('contact.store');
});

Route::get('/about', function(){return view('about');});

Route::get('/details', function(){return view('details');});

Route::get('/rooms', [RoomsController::class, 'store']);

Route::get('/roomdetails/{id}', [RoomsController::class, 'show']);

Route::get('/offers', [RoomsController::class, 'showOffers']);