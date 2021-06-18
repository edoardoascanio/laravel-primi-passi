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
    return view('home');
})->name("home");

Route::get('/info', function () {
    return view ("info",[
        "company" => "MyBrand",
        "address" => "via Roma 34",

    ]);
})->name("info");

Route::get('/contatti', function () {
    return view ("contatti",[
        "email" => "MyBrand@gmail.com",
    ]);
})->name("contacts");