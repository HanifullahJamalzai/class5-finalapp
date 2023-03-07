<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyUserMail;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManagerStatic as Image;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'required|email',
            'bio' => 'required|min:10|max:255',
            'password' => 'required|min:6|max:255|confirmed'
        ]);

        // User::create([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'bio' => $request->bio,
        //         'password' => bcrypt($request->password)
        //     ]);
        $user = new User;
        $user->name = $request->name;
        $user['email'] = $request->email;
        $user['bio'] = $request->bio;
        $user['password'] = bcrypt($request->password);
        if($request->photo){
            // dd($request->photo);
            $fileName = 'user_'.date('Ymd_hmis').'_'.rand(10, 10000).'.'.$request->photo->extension();
            // open an image file
            $img = Image::make($request->photo);
            // now you are able to resize the instance
            $img->resize(200, 200);
            $img->save('storage/photos/users/'.$fileName);

            // $request->photo->storeAs('photos/users/', $fileName, 'public');
            $user['photo'] = '/storage/photos/users/'.$fileName;
        }
        $user->save();

        $token = VerifyUser::create([
            'user_id' => $user->id,
            'token'  => str()->random(60)
        ]);

        Mail::to($user->email)->send(new VerifyUserMail($user));

        
        // dd($request->all());
        session()->flash('success', 'You have successfully registered Please Verify Your Email to Proceed the Request');
        return redirect('login');
    }
}
