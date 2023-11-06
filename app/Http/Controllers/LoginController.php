<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->get()->first();

        if(!auth()->attempt($request->only('username', 'password'), $request->remember)){
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        return redirect()->route('home');
    }
}
