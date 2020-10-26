<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    //
    function carregarPagina(Request $req) {
        $prontuario = 'SP1752367';
        $nome = 'Gabriel Kazuki Onishi';
        $email = 'kazuki.onishi@hotmail.com';
        $senha = '123';
        $bio = 'Teste BIO';
        return view('perfil',['prontuario'=>$prontuario,'nome'=>$nome,'email'=>$email,'senha'=>$senha,'bio'=>$bio]);
    }

    function atualizarPerfil(Request $req) {
        return $this->carregarPagina($req);
    }
}
