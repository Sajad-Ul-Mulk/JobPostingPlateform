<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function store(Request $request)
    {
//        dd($request->all());

        $user=$request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);


        if(Auth::attempt($user))
        {
            $request->session()->regenerate();
            return redirect('/job');
        }

        throw ValidationException::withMessages(['email'=>'Credentials dose not match']);
    }


    public function destroy(){
        Auth::logout();
        return redirect('/login');
    }
}
