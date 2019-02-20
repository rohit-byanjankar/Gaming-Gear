<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SignupController extends Controller
{
    public function show()
    {
    	return view('pages.signup');
    }

    public function reg(Request $request){
        $uname = $request->input('username');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $lname = $request->input('lname');
        $fname = $request->input('fname');

        $user = user::create([
            'username'=>$uname,
            'email'=>$email,
            'password'=>$password,
            'lname'=>$lname,
            'fname'=>$fname
        ]);

        auth()->login($user);
        return redirect('/');
    }
}
