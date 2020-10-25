<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConteudoController extends Controller
{
    //
    function carregarPagina($area, Request $req) {
        $req->session()->put('perfil','professor');
        if (session('perfil') == 'professor') {
            $menus = [];
            if ($area == 'Literatura') {
                array_push($menus, ['nome'=>'Trovadorismo','icone'=>'book']);
                array_push($menus, ['nome'=>'Humanismo','icone'=>'book']);
                array_push($menus, ['nome'=>'Quinhentismo','icone'=>'book']);
            }

            return view('professor.conteudo',['qtdNotificacoes'=>'5','menus'=>$menus]);
        }
    }
}
