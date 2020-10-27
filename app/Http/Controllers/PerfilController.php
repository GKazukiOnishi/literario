<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{
    //
    function carregarPagina(Request $req) {
        $user = User::find(auth()->user()->id);
        $prontuario = $user->email;
        $nome = $user->name;
        $email = 'teste@teste.com';
        $senha = '123';
        $bio = 'Teste';
        return view('perfil',['prontuario'=>$prontuario,'nome'=>$nome,'email'=>$email,'senha'=>$senha,'bio'=>$bio]);
    }

    function atualizarPerfil(Request $req) {
        return $this->carregarPagina($req);
    }
}
