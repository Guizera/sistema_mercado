<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest');
    }

    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(Request $request) {
        /** @var User $user */
        $user = new User();
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        //$user = app(User::class)->create($validatedData);
        $user->create($validatedData);
        //$retorno = redirect()->back()->with('message', 'Cadastrado com sucesso');
        return redirect('/login');
    }
}
