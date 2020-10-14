<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    function carregarPagina(Request $req) {
        $req->session()->put('perfil','professor');
        if (session('perfil') == 'professor') {
            $menus = [];
            array_push($menus, ['nome'=>'Estatística','icone'=>'timeline']);
            array_push($menus, ['nome'=>'Literatura','icone'=>'book']);
            array_push($menus, ['nome'=>'Gramática','icone'=>'format_quote']);
            array_push($menus, ['nome'=>'Redação','icone'=>'format_align_justify']);
            return view('principal',['qtdNotificacoes'=>'5','menus'=>$menus]);
        }
    }
}
