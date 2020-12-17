<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Exercicio;
use App\Models\Resolucao;
use App\Models\Alternativa;
use App\Models\Area;

class ExercicioController extends Controller
{
    protected function  ehAluno() {   
        $user = User::where('id',auth()->user()->id)->first();
        if ($user->isTeacher == 1)
            return false;
        return true;
    }

    function convertExercicioToArray(Exercicio $exercicio, $alternativas, $resolucao, $subsecao) {
        return ['id'=>$exercicio->id,'nome'=>$exercicio->nome,'enunciado'=>$exercicio->enunciado,'tipo'=>$exercicio->tipo,'alternativas'=>$alternativas,'resolucao'=>$resolucao,'subsecao'=>$subsecao];
    }

    function convertAlternativaToArray(Alternativa $alternativa) {
        return ['id'=>$alternativa->id,'texto'=>$alternativa->texto,'correto'=>$alternativa->ind_correto,'ordem'=>$alternativa->ordem];
    }

    function convertResolucaoToArray(Resolucao $resolucao) {
        return ['id'=>$resolucao->id,'resposta'=>$resolucao->resposta];
    }

    function convertAreaToArray(Area $area) {
        return ['id'=>$area->id,'nome'=>$area->nome,'descricao'=>$area->descricao,'img'=>$area->img,'icone'=>$area->icone];
    }

    function montarExerciciosSubsecao($idSecao) {
        $exercicios = [];
        $subsecoes = [];
        foreach(Area::where('id_area_relacionada',$idSecao)->where('nivel',3)->get() as $area) {
            array_push($subsecoes,$this->convertAreaToArray($area));
            foreach(Exercicio::where('id_area',$area->id)->get() as $exercicio) {
                if($exercicio->tipo == 'A') {
                    $alternativas = [];
                    foreach(Alternativa::where('id_exercicio',$exercicio->id)->get() as $alternativa) {
                        array_push($alternativas,$this->convertAlternativaToArray($alternativa));
                    }
                    array_push($exercicios,$this->convertExercicioToArray($exercicio,$alternativas,[],$area->nome));
                } else {
                    $resolucao = Resolucao::where('id_exercicio',$exercicio->id)->first();
                    if (isset($resolucao)) {
                        $resolucao = convertResolucaoToArray($resolucao);
                    }
                    array_push($exercicios,$this->convertExercicioToArray($exercicio,[],$resolucao,$area->nome));
                }
            }
        }
        return ['exercicios'=>$exercicios,'subsecoes'=>$subsecoes];
    }

    function carregarPaginaExercicios($idArea, $idSecao, Request $req) {
        $dados = $this->montarExerciciosSubsecao($idSecao);
        if (!$this->ehAluno()) {
            var_dump($dados);
            return view('professor.exercicio',['exercicios'=>$dados['exercicios'],'css'=>'conteudo','subsecoes'=>$dados['subsecoes'],'secao'=>$idSecao,'area'=>$idArea]);
        } else {
            return view('aluno.exercicio',['exercicios'=>$dados['exercicios'],'css'=>'conteudo','subsecoes'=>$dados['subsecoes']]);
        }
    }

    function cadastrarExercicio($idArea, $idSecao, Request $req) {
        if (!$this->ehAluno()) {
            $exercicio = new Exercicio();
            $exercicio->tipo = $_POST['tipo'];
            $exercicio->enunciado = $_POST['enunciado'];
            $exercicio->id_area = $_POST['subsecao'];
            $exercicio->save();
            return redirect(url()->previous());
        }
    }
}
