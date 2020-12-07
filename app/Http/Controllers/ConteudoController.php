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
        $user = User::where('id',auth()->user()->id)->first();
        if ($user->isTeacher == 1)
            return false;
        return true;
    }
    
    function convertAreaToArray(Area $area) {
        return ['id'=>$area->id,'nome'=>$area->nome,'descricao'=>$area->descricao,'img'=>$area->img,'icone'=>$area->icone];
    }

    function montarMenusSecoes($idConteudo) {
        $menus = [];
        foreach(Area::where('nivel',1)->where('id_conteudo',$idConteudo)->get() as $area) {
            array_push($menus, $this->convertAreaToArray($area));
        }
        array_unshift($menus, ['id'=>0,'nome'=>'Estatística','icone'=>'timeline']);
        
        $menusComConteudo = [];
        foreach($menus as $menu) {
            $conteudos = [];
            foreach(Area::where('nivel',2)->where('id_conteudo',$idConteudo)->where('id_area_relacionada',$menu['id'])->get() as $area) {
                array_push($conteudos, $this->convertAreaToArray($area));
            }
            $menu['conteudo'] = $conteudos;
            array_push($menusComConteudo, $menu);
        }
        return $menusComConteudo;
    }

    function carregarPaginaSecoes(Request $req) {
        if (!$this->ehAluno()) {
            $idConteudo = Conteudo::select('id')->where('id_professor',auth()->user()->id)->first()->id;            

            return view('professor.principal',['menus'=>$this->montarMenusSecoes($idConteudo),'css'=>'principal']);
        }
        else{
            //Conteudo::select('id')->where('id_professor',auth()->user()->id_professor)->first()->id;
            $idConteudo = 1;
            
            return view('aluno.principal',['menus'=>$this->montarMenusSecoes($idConteudo),'css'=>'principal']);
        }
    }

    function montarMenusSubsecoes($idConteudo, $idArea) {
        $menus = [];
        foreach(Area::where('nivel',2)->where('id_conteudo',$idConteudo)->where('id_area_relacionada',$idArea)->get() as $area) {
            $menu = $this->convertAreaToArray($area);
            $subsecoes = [];
            foreach(Area::where('nivel',3)->where('id_conteudo',$idConteudo)->where('id_area_relacionada',$menu['id'])->get() as $area) {
                $subsecao = $this->convertAreaToArray($area);
                $subsecao['conteudo'] = [];
                foreach(Area::where('nivel',4)->where('id_conteudo',$idConteudo)->where('id_area_relacionada',$subsecao['id'])->get() as $conteudo) {
                    array_push($subsecao['conteudo'], $this->convertAreaToArray($conteudo));
                }
                array_push($subsecoes, $subsecao);
            }
            $menu['subsecao'] = $subsecoes;
            array_push($menus, $menu);
        }
        return $menus;
    }

    function carregarPaginaSubsecoes($idArea, Request $req) {
        if (!$this->ehAluno()){
            $idConteudo = Conteudo::select('id')->where('id_professor',auth()->user()->id)->first()->id;

            return view('professor.conteudo',['menus'=>$this->montarMenusSubsecoes($idConteudo, $idArea),'css'=>'conteudo','idArea'=>$idArea]);
        } 
        else
        {
            $idConteudo = 1;

            return view('aluno.conteudo',['menus'=>$this->montarMenusSubsecoes($idConteudo, $idArea),'css'=>'conteudo','idArea'=>$idArea]);
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