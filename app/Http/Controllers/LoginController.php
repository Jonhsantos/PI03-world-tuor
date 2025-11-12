<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
          // var_dump('login');
        ]);

        $credentials = $request->only('email', 'password');
        $authenticated = auth()->attempt($credentials);

        if (!$authenticated) {
            return redirect()->route('login.index')->with(['sucess' => 'Login In']);
        }   
        return redirect()->route('dashboard'); //redirecionar após login
    }

    public function destroy()
    {
        auth()->logout(); // Adicione logout aqui
        return redirect()->route('login.index'); // Redirecionar após logout
        //var_dump('logout');
    }
}
