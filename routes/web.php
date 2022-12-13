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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/hotel', function () {
    return view('hotel', [
        "title" => "hotel",
        'active' => 'hotel'
    ]);
});

Route::get('/booking', function () {
    return view('booking', [
        "title" => "booking",
        'active' => 'booking'
    ]);
});