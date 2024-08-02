<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use function Laravel\Prompts\password;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registerationForm');
    }

    public function store(Request $request)
    {
        $validated=$request->validate(
            [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',Password::min(5),'confirmed',
        ]);

//        dd($validated);
        $user=User::create($validated );
        Auth::login($user);
        return redirect('/job');
    }

}
