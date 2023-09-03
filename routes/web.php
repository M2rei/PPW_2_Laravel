<?php

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

Route::get('/about', function () {
    return view("about", [
        "name" => "pororo",
        "email" => "pororo@gmail",
        "image" => "samsung.jpg"
    ]);
});

Route::get('/aboutt', function () {
    return view("aboutt", [
        "name" => "pororo",
        "email" => "pororo@gmail",
    ]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/post', function () {
    return view('post');
});


