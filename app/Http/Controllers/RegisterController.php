<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(Request $request){
        $attributes = $request->validate([
            'name'=>'required|string|max:255',
            'username'=>'required|min:6|max:255|unique:users',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:7|max:255',
        ]);
            $user = User::create($attributes);
            Auth::login($user);
            return redirect('/')->with('success','Kayıt işlemi başarılı.');
        }
}
