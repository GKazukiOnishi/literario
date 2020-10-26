<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conteudo;
use App\Models\Area;

class ConteudoController extends Controller
{
    
    function carregarPaginaSecoes(Request $req) {
        $professorAssociado = Conteudo::select('id')->where('id_professor',auth()->user()->id)->get();
            if ($professorAssociado=='[]'){
            $conteudo = new Conteudo; 
            $conteudo->id_professor = auth()->user()->id;
            $conteudo -> save();
            }
            $idConteudo = Conteudo::select('id')->where('id_professor',auth()->user()->id)->get();
            $areasFixas = [['nome'=>'Literatura','nivel'=>1,'icone'=>'book'],['nome'=>'Gramática','nivel'=>1,'icone'=>'book'],['nome'=>'Redação','nivel'=>1,'icone'=>'book']];

            // foreach ($areasFixas as $campo => $valor)
            // {
            //     echo $areasFixas['nome']
            //     $area = New Area();
            //     $area->nome = $areasFixas['nome'];
            //     $area->nivel = $areasFixas['nivel'];
            //     $area->icone=$areasFixas['icone'];
            //     $area->id_conteudo = $idConteudo;
            //     $area->save();
            // }
            

        $req->session()->put('perfil','professor');
        if (session('perfil') == 'professor') {
            $menus = [];
            array_push($menus, ['id'=>1,'nome'=>'Estatística','icone'=>'timeline']); //Estatística não ficará no banco, pois não segue a estrutura de módulos -> exceção

            //conteúdos
            $areas = Area::all();
            array_push($menus, ['id'=>2,'nome'=>'Literatura','icone'=>'book','conteudo'=>$areas]);
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
        $area = new Area();
        echo $req;
        $idConteudo = Conteudo::select('id')->where('id_professor',auth()->user()->id)->get()->first();
        $area->nome=$req->input('nome');
        $area->descricao = $req->input('descricao');
        $area->id_conteudo = $idConteudo['id'];
        $md5Name = md5_file($req->file('img')->getRealPath());
        $guessExtension = $req->file('img')->guessExtension();
        $area->img = $md5Name;
        $area->nivel = 2;
        $area->icone='book';
        $area->save();
        return redirect('/conteudo');
    }
}