<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function fazerLogin()
    {
        return view('user.login',['qtdNotificacoes'=>'5','menus'=>null]);
    }
    function fazerLogout()
        {
            return view('user.login',['qtdNotificacoes'=>'5','menus'=>null]);
        }
    
}
