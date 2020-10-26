<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedacaoController extends Controller
{
    //
    function carregarPaginaRedacao($idAluno, $idTema, Request $req) {
        return view('professor.redacao');
    }
}
