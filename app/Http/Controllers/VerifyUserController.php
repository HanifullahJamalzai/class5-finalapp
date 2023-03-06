<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VerifyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyUserController extends Controller
{
    public function verifyUser($token)
    {
        $isToken = VerifyUser::where('token', $token)->first();
        if($isToken){
            $user_id = $isToken->user_id;
            $user = User::find($user_id);
            $user->email_verified_at = Carbon::now();
            $user->save();
            session()->flash('success', 'You have successfully Verified Your Email Please Login to proceed you request');
            return redirect('login');
        }
    }
}
