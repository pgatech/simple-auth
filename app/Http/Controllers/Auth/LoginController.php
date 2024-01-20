<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function store()
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        Auth::attempt(request()->only('email','password'), request('remember'));

        return redirect('/dashboard');
    }
}
