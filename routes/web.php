<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\VerifyUserController;
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
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::resource('/profile', ProfileController::class);
    Route::resource('/tag', TagController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/setting', SettingController::class);
    Route::resource('/message', MessageController::class);
    Route::get('/property/{id}/delete', [PropertyController::class, 'destroy'])->name('property.delete');
    Route::resource('/property', PropertyController::class);
    
    Route::get('/testimonial/search', [TestimonialController::class, 'search'])->name('testimonial.search');
    Route::get('/testimonial/restore', [TestimonialController::class, 'restore'])->name('testimonial.restore');
    Route::delete('/testimonial/forceDelete', [TestimonialController::class, 'forceDelete'])->name('testimonial.forceDelete');
    Route::get('/testimonial/trash', [TestimonialController::class, 'trash'])->name('testimonial.trash');
    Route::resource('/testimonial', TestimonialController::class);
    Route::get('/logout', [LogoutController::class, 'logout'] )->name('logout');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('verifyUser/{token}', [VerifyUserController::class, 'verifyUser'])->name('verifyUser');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login/user', [LoginController::class, 'login'])->name('user.login');
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register/user', [RegisterController::class, 'store'])->name('user.store');
});



Route::group(['middleware', 'LanguageSwitcher'], function(){

    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::get('/property/{id}/{property?}', [LandingController::class, 'property'])->name('property');
    
    
    Route::get('/contact', function () {
        return view('landing.contact');
    });
    
    Route::get('/agent', function () {
        return view('landing.agent');
    });
    
    Route::get('/properties', function () {
        return view('landing.properties');
    });

    Route::get('/language/{language}', function($language){
        // dd($language);
        session(['language' => $language]);
        return back();
    })->name('language');
});


