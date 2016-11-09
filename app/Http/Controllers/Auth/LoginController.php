<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        $email = Request::get('email');
        $password = Request::get('password');
        $remember_me = true;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_me)) {
            return redirect()->intended('/');
        }

        //Todo::沒登入要怎麼辦?
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
