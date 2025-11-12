<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    //Exibe o formulário de cadastro de usuário.
     
    public function showRegister()
    {
        return view('auth.register');
    }
}

