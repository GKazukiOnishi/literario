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
            array_push($menus, ['nome'=>'Estatística','icone'=>'timeline']); //Estatística não ficará no banco, pois não segue a estrutura de módulos -> exceção

            //conteúdos
            $conteudoLit = [['img'=>'img/trovadorismo.jpg','nome'=>'Trovadorismo','descricao'=>'Escola literária de ...............'],
                            ['img'=>'img/humanismo.jpg','nome'=>'Humanismo','descricao'=>'Escola literária de ...............'],
                            ['img'=>'img/quinhentismo.jpg','nome'=>'Quinhentismo','descricao'=>'Escola literária de ...............']];
            array_push($menus, ['nome'=>'Literatura','icone'=>'book','conteudo'=>$conteudoLit]);
            
            $conteudoGra = [['img'=>'img/classes-gramaticais.jpg','nome'=>'Classes Gramaticais','descricao'=>'as dez classes gramaticais........'],
                            ['img'=>'img/acentos.jpg','nome'=>'Ortografia e Acentuação','descricao'=>'tudo sobre ortografia e acentuação.....'],
                            ['img'=>'img/sintaxe.jpg','nome'=>'Sintaxe','descricao'=>'componentes, exemplos........']];
            array_push($menus, ['nome'=>'Gramática','icone'=>'format_quote','conteudo'=>$conteudoGra]);

            $conteudoRed = [['img'=>'img/meio-ambiente.jpg','nome'=>'Meio ambiente','descricao'=>'Desenvolvimento econômico ou preservação ecológica?'],
                            ['img'=>'img/racismo.jpg','nome'=>'Sociedade','descricao'=>'Importância de políticas públicas no combate ao racismo'],
                            ['img'=>'img/teatro.jpg','nome'=>'Cultura','descricao'=>'A democratização do acesso ao teatro']];
            array_push($menus, ['nome'=>'Redação','icone'=>'format_align_justify','conteudo'=>$conteudoRed]);

            return view('principalProfessor',['qtdNotificacoes'=>'5','menus'=>$menus]);
        }
    }

    function cadastrarConteudo(Request $req) {
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $md5Name = md5_file($req->file('img')->getRealPath());
        $guessExtension = $req->file('img')->guessExtension();
        $file = $req->file('img')->storeAs('docs', $md5Name.'.'.$guessExtension);
        $menu = $req->input('menu');
        return redirect('/');
    }
}
