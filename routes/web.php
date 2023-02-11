<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
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

Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/user', [LoginController::class, 'login'])->name('user.login');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/user', [RegisterController::class, 'store'])->name('user.store');



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


