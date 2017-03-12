<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $firstname = $request['firstname'];
        
        $user = new User();
        $user->email = $email;
        $user->password = $password;
        $user->firstname = $firstname;
        
        $user->save();
        
        return redirect()->back();
    }
    
    public function postSignIn(Request $request)
    {
        
    }
}
