<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    protected $redirectTo = '/home';
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function getLogin(){
        return view('auth.login');
    }
    
    public function postLogin(Request $request){
        if(Auth::attempt([
            'email' =>$request->email,
            'password'=> $request->password
        ])){
            return redirect('/home');
        }
        else{
            return redirect()->back()->with('message', 'Não foi possivel logar');
        }
    }

    public function Logout(Request $request){
        Auth::logout();

        $request->session()->regenerate(true);

        $request->session()->flush();

        return redirect('/login');
    }
}
