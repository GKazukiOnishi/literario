<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conteudo;
use App\Models\Area;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class ConteudoController extends Controller
{
    protected function  ehAluno() {   
        $ehProfessor = User::select('isTeacher')->where('id',auth()->user()->id)->get();
        if ($ehProfessor==['1'])
            return false;
        return true;
    }
    
    function convertAreaToArray(Area $area) {
        return ['id'=>$area->id,'nome'=>$area->nome,'descricao'=>$area->descricao,'img'=>$area->img,'icone'=>$area->icone];
    }

    function carregarPaginaSecoes(Request $req) {
        if (!$this->ehAluno()) {
            $professorAssociado = Conteudo::select('id')->where('id_professor',auth()->user()->id)->get();
            if ($professorAssociado=='[]'){
                $conteudo = new Conteudo; 
                $conteudo->id_professor = auth()->user()->id;
                $conteudo -> save();
            }
            $idConteudo = Conteudo::select('id')->where('id_professor',auth()->user()->id)->get();

            $menus = [];
            foreach(Area::where('nivel',1)->get() as $area) {
                array_push($menus, $this->convertAreaToArray($area));
            }
            array_unshift($menus, ['id'=>1,'nome'=>'Estatística','icone'=>'timeline']);

            
            $menus = array_map(function ($menu) {
                $conteudos = [];
                foreach(Area::where('nivel',2)->where('id_area_relacionada',$menu['id'])->get() as $area) {
                    array_push($conteudos, $this->convertAreaToArray($area));
                }
                $menu['conteudo'] = $conteudos;
                return $menu;
            }, $menus);

            return view('professor.principal',['qtdNotificacoes'=>'5','menus'=>$menus,'css'=>'principal']);
        }
        else{
            return view('aluno.principal');
        }
    }

    function carregarPaginaSubsecoes($idArea, Request $req) {
        if (!$this->ehAluno()){
            $menus = [];
            foreach(Area::where('nivel',2)->where('id_area_relacionada',$idArea)->get() as $area) {
                $menu = $this->convertAreaToArray($area);
                $subsecoes = [];
                foreach(Area::where('nivel',3)->where('id_area_relacionada',$menu['id'])->get() as $area) {
                    $subsecao = $this->convertAreaToArray($area);
                    $subsecao['conteudo'] = [];
                    foreach(Area::where('nivel',4)->where('id_area_relacionada',$subsecao['id'])->get() as $conteudo) {
                        array_push($subsecao['conteudo'], $this->convertAreaToArray($conteudo));
                    }
                    array_push($subsecoes, $subsecao);
                }
                $menu['subsecao'] = $subsecoes;
                array_push($menus, $menu);
            }

            return view('professor.conteudo',['qtdNotificacoes'=>'5','menus'=>$menus,'css'=>'conteudo','idArea'=>$idArea]);
        } 
        else
        {
            return view('aluno.conteudo');
        }
    }

    function cadastrarSecao($idArea, Request $req) {
        if (!$this->ehAluno()) {
            $area = new Area();
            $idConteudo = Conteudo::select('id')->where('id_professor',auth()->user()->id)->get()->first();
            $area->nome=$req->input('nome');
            $area->descricao = $req->input('descricao');
            $area->id_conteudo = $idConteudo['id'];
            $md5Name = md5_file($req->file('img')->getRealPath());
            $guessExtension = $req->file('img')->guessExtension();
            $file = $req->file('img')->storeAs('images', $md5Name.'.'.$guessExtension);
            $area->img = $file;
            $area->nivel = 2;
            $area->icone='book';
            $area->id_area_relacionada = $idArea;
            $area->save();
            return redirect(url()->previous());
        }
    }

    function cadastrarSubsecao($idArea, $idSecao, Request $req) {
        if (!$this->ehAluno()) {
            $area = new Area();
            $idConteudo = Conteudo::select('id')->where('id_professor',auth()->user()->id)->get()->first();
            $area->id_conteudo = $idConteudo['id'];
            $area->nome = $req->input('nome');
            $area->nivel = 3;
            $area->id_area_relacionada = $idSecao;
            $area->save();
            return redirect(url()->previous());
        }
    }

    function cadastrarConteudo($idArea, $idSecao, $idSubsecao, Request $req) {
        if (!$this->ehAluno()) {
            $area = new Area();
            $idConteudo = Conteudo::select('id')->where('id_professor',auth()->user()->id)->get()->first();
            $area->id_conteudo = $idConteudo['id'];
            $area->nome = $req->input('nome');
            $area->descricao = $req->input('descricao');
            $area->nivel = 4;
            $area->id_area_relacionada = $idSubsecao;
            $md5Name = md5_file($req->file('arq')->getRealPath());
            $guessExtension = $req->file('arq')->guessExtension();
            $file = $req->file('arq')->storeAs('storage', $md5Name.'.'.$guessExtension);
            $area->img = $file;
            $area->save();
            return redirect(url()->previous());
        }
    }

    function baixarConteudo($idArea, $idSecao, $idSubsecao, $idConteudo) {
        $area = Area::find($idConteudo);
        $fileUrl = $area->img;
        $extPos = strpos($fileUrl, '.');
        $ext = substr($fileUrl,$extPos);
        return Storage::download($fileUrl, $area->nome.$ext);
    }
}