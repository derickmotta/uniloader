<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    // Regiter the user

    public function register(Request $request)
    {
        // Validation

        $fields = $request->validate(
        [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);

        $user = User::create($fields);

        Auth::login($user);

        // Redirect

        return redirect()->route('loged');
    }



    // Login user

    public function login(Request $request)
    {
        $fields = $request->validate(
        [
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($fields, $request->remember))
        {
            return redirect()->route('loged');
        }
        else
        {
            return back()->withErrors(
            [
                'failed' => 'The provided credentials do not match our records.'
            ]);
        }
    }

    // Logout User

    public function logout(Request $request)
    {
        // logout user
        Auth::logout();

        // invalidate session
        $request->session()->invalidate();

        // regenerate session token
        $request->session()->regenerateToken();

        // redirect to homepage
        return redirect('/');
    }
}
