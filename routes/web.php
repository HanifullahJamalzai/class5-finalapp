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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/contact', function () {
    return view('landing.contact');
});

Route::get('/agent', function () {
    return view('landing.agent');
});

Route::get('/properties', function () {
    return view('landing.properties');
});


