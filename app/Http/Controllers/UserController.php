<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDashboard() {
        return view('dashboard');
    }
    
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|email|unique:users', 
            'firstname' => 'required|max:120',
            'password' => 'required|min:4'
        ]);
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $firstname = $request['firstname'];
        
        $user = new User();
        $user->email = $email;
        $user->password = $password;
        $user->firstname = $firstname;
        
        $user->save();
        
        Auth::login($user);
        
        return redirect()->route('dashboard');
    }
    
    public function postSignIn(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|email', 
           'password' => 'required'
        ]);
        
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}
