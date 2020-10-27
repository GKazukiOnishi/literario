<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    //
    function carregarPaginaExercicios($idArea, $idSecao, Request $req) {
        if (session('perfil') == 'professor') {
            return view('professor.exercicio');
        } else {
            return view('aluno.exercicio');
        }
    }
}
