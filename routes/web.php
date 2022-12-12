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
        "active" =>"home"
    ]);
});

Route::get('/room', function () {
    return view('room', [
        "title" => "Room",
        "active" =>"room"
    ]);
});

Route::get('/activities', function () {
    return view('activities', [
        "title" => "Activities",
        "active" =>"activities"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "active" =>"contact"
    ]);
});