<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class SessionsController extends Controller
{
    public function store(Request $request){
        $attributes = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=> 'Lütfen bilgilerinizi kontrol ediniz!'
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('success','Yeniden hoşgeldiniz!');
    }
    public function destroy(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success','Çıkış yapıldı.');
    }
    public function create(){
        return view('sessions.create');
    }
}
