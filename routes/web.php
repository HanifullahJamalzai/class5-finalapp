<?php

use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
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
    Route::resource('/property', PropertyController::class);
    
    Route::get('/testimonial/search', [TestimonialController::class, 'search'])->name('testimonial.search');
    Route::get('/testimonial/restore', [TestimonialController::class, 'restore'])->name('testimonial.restore');
    Route::delete('/testimonial/forceDelete', [TestimonialController::class, 'forceDelete'])->name('testimonial.forceDelete');
    Route::get('/testimonial/trash', [TestimonialController::class, 'trash'])->name('testimonial.trash');
    Route::resource('/testimonial', TestimonialController::class);
    Route::get('/logout', [LogoutController::class, 'logout'] )->name('logout');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login/user', [LoginController::class, 'login'])->name('user.login');
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register/user', [RegisterController::class, 'store'])->name('user.store');
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


