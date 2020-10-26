<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConteudoController extends Controller
{
    //
    function carregarPaginaSecoes(Request $req) {
        $req->session()->put('perfil','professor');
        if (session('perfil') == 'professor') {
            $menus = [];
            array_push($menus, ['id'=>1,'nome'=>'Estatística','icone'=>'timeline']); //Estatística não ficará no banco, pois não segue a estrutura de módulos -> exceção

            //conteúdos
            $conteudoLit = [['img'=>'img/trovadorismo.jpg','nome'=>'Trovadorismo','descricao'=>'Escola literária de ...............'],
                            ['img'=>'img/humanismo.jpg','nome'=>'Humanismo','descricao'=>'Escola literária de ...............'],
                            ['img'=>'img/quinhentismo.jpg','nome'=>'Quinhentismo','descricao'=>'Escola literária de ...............']];
            array_push($menus, ['id'=>2,'nome'=>'Literatura','icone'=>'book','conteudo'=>$conteudoLit]);
            
            $conteudoGra = [['img'=>'img/classes-gramaticais.jpg','nome'=>'Classes Gramaticais','descricao'=>'as dez classes gramaticais........'],
                            ['img'=>'img/acentos.jpg','nome'=>'Ortografia e Acentuação','descricao'=>'tudo sobre ortografia e acentuação.....'],
                            ['img'=>'img/sintaxe.jpg','nome'=>'Sintaxe','descricao'=>'componentes, exemplos........']];
            array_push($menus, ['id'=>3,'nome'=>'Gramática','icone'=>'format_quote','conteudo'=>$conteudoGra]);

            $conteudoRed = [['img'=>'img/meio-ambiente.jpg','nome'=>'Meio ambiente','descricao'=>'Desenvolvimento econômico ou preservação ecológica?'],
                            ['img'=>'img/racismo.jpg','nome'=>'Sociedade','descricao'=>'Importância de políticas públicas no combate ao racismo'],
                            ['img'=>'img/teatro.jpg','nome'=>'Cultura','descricao'=>'A democratização do acesso ao teatro']];
            array_push($menus, ['id'=>4,'nome'=>'Redação','icone'=>'format_align_justify','conteudo'=>$conteudoRed]);

            return view('professor.principal',['qtdNotificacoes'=>'5','menus'=>$menus,'css'=>'principal']);
        }
    }

    function carregarPaginaSubsecoes($idArea, Request $req) {
        $req->session()->put('perfil','professor');
        if (session('perfil') == 'professor') {
            $menus = [];
            if ($idArea == '2') {
                $conteudosSec1T = [['nome'=>'Conteúdo 1','descricao'=>'Descrição do conteúdo'],['nome'=>'Conteúdo 2','descricao'=>'Descrição do conteúdo'],['nome'=>'Conteúdo 3','descricao'=>'Descrição do conteúdo'],['nome'=>'Conteúdo 4','descricao'=>'Descrição do conteúdo']];
                $subsecoesT = [['nome'=>'Fase N','conteudo'=>$conteudosSec1T]];
                array_push($menus, ['nome'=>'Trovadorismo','icone'=>'book','subsecao'=>$subsecoesT]);
                $conteudosSec1H = [['nome'=>'Conteúdo 1','descricao'=>'Descrição do conteúdo']];
                $subsecoesH = [['nome'=>'Fase N','conteudo'=>$conteudosSec1H]];
                array_push($menus, ['nome'=>'Humanismo','icone'=>'book','subsecao'=>$subsecoesH]);
                $conteudosSec1Q = [['nome'=>'Conteúdo 1','descricao'=>'Descrição do conteúdo']];
                $subsecoesQ = [['nome'=>'Fase N','conteudo'=>$conteudosSec1Q]];
                array_push($menus, ['nome'=>'Quinhentismo','icone'=>'book','subsecao'=>$subsecoesQ]);
            }

            return view('professor.conteudo',['qtdNotificacoes'=>'5','menus'=>$menus,'css'=>'conteudo']);
        }
    }

    function cadastrarSecao($idArea, Request $req) {
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $md5Name = md5_file($req->file('img')->getRealPath());
        $guessExtension = $req->file('img')->guessExtension();
        $file = $req->file('img')->storeAs('images', $md5Name.'.'.$guessExtension);
        return redirect('/');
    }
}
