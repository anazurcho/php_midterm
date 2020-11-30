<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }
    public function postLogin(UserRequest $request){
        $credentials = $request->except(('_token'));
        if (Auth::attempt($credentials)){
            return redirect()->route('questions');
        }else{
            abort(403);
        }
    }

    public function register(){
        return view('user.register');
    }

    public function postRegister(UserRequest $request){
//        $request->
//        $user->password = bcrypt('test123');
//        $user =  new User;
//        $user -> name = $request->input('name');
//        $user -> password = bcrypt($request->input('password'));
//        $user -> email = $request->input('email');
        $user = new User($request->all());
        $user -> password = bcrypt($request->input('password'));
        $user->save();
        return $this->postLogin($request);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
