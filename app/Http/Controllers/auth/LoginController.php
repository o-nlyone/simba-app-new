<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request){

        $attr = request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::whereEmail(request('email'))->first();
        if (Auth::attempt($attr)){
            Auth::login($user);
            return redirect()->intended('/dashboard');
        } else {
            return back()->with('error', 'Email / Password Salah!')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
