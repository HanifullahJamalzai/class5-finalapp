<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:255',
        ],[
            'email.required' => 'اندیواله ایمیل دی واچوه',
            'email.email' => 'بچیش همو ایمیل ته صحی نوشته کو'
        ]);
        
        if(!auth()->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            session()->flash('failed', 'Email and Password mismatch!');
            return back();
        }else {
            auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember);
            return redirect('admin');
        }
    }
}
