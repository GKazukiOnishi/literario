@extends('base')

@section('adicionais')
    <!-- Conteúdo da página -->
    <div class="tab-content" id="v-nav-tabContent">
        <div class="container">
            <h4 class="bg-light" style="padding: 10px; text-align: center">Exercícios</h4>
            
            <!-- Cards com exes -->

            @foreach ($exercicios as $index=>$exercicio)

                @php
                    $textoCorreto = "";
                    $correto = -1;
                    foreach($exercicio['alternativas'] as $i=>$alternativa) {
                        if($alternativa['correto'] == 1) {
                            $textoCorreto = $alternativa['texto'];
                            $correto = $i;
                        }
                    }
                @endphp

                <div class="card m-3">
                    <div class="card-body">
                        <form action="/exercicio/{{$area}}/{{$secao}}/{{$exercicio['id']}}" method="POST">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Exercício {{$index+1}} - Subseção: {{$exercicio['subsecao']}}</label><br/>
                                            @if (isset($exercicio['enunciado1']))
                                                <label>{{$exercicio['enunciado1']}}</label><br/>
                                                <img src="{{asset($exercicio['img'])}}" alt="Imagem {{$exercicio['nomeImg']}}" /><br/>
                                                <label>{{$exercicio['enunciado2']}}</label>
                                            @else
                                                <label>{{$exercicio['enunciado']}}</label>
                                            @endif
                                            @if ($exercicio['tipo'] == 'D')
                                                <textarea class="form-control" name="resposta" id="exampleFormControlTextarea{{$index}}" rows="3"></textarea>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if ($exercicio['tipo'] == 'A')
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Alternativas</legend>
                                                <div class="col-sm-10">
                                                    @foreach ($exercicio['alternativas'] as $j=>$alternativa)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="resposta" value="{{$alternativa['id']}}" id="resp{{$index}}{{$j}}">
                                                            <label class="form-check-label" for="resp{{$j}}">
                                                                {{$alternativa['texto']}}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end mt-4">
                                        <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff" onclick="showMultipla({{$index}}, {{$correto}});">Responder</button>
                                    </div>

                                    <!-- div da resposta -->
                                    <div class="row mt-4" id="respostaMultipla{{$index}}" style="display: none;">
                                        <div class="col-12">
                                            <div class="row mb-2">Resposta:</div>
                                            <!-- div caso resposta correta -->
                                            <div class="conteiner col-12 rounded border mt-3 mb-3" id="respostaMultiplaCorreta{{$index}}" style="background-color:#dff0d8;display: none;">Resposta correta! Parabéns!</div>
                                            <!-- div caso resposta errada -->
                                            <div class="conteiner col-12 rounded border mt-3 mb-3" id="respostaMultiplaErrada{{$index}}" style="background-color:#f2dede;display: none;">
                                                <p class="mt-2">Resposta errada :(</p>
                                                <p>O esperado seria: {{$textoCorreto}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row justify-content-end mt-4">
                                        <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff" onclick="showDissertativa({{$index}});">Ver gabarito</button>
                                    </div>

                                    <!-- div da resposta -->
                                    <div class="row mt-4" id="respostaDissertativa{{$index}}" style="display: none;">
                                        <div class="col-12">
                                            <div class="row mb-2">Resposta:</div>
                                            <div class="conteiner col-12 rounded border mt-3 mb-3" style="background-color:#d9edf7;">{{isset($exercicio['resolucao']) ? $exercicio['resolucao']['resposta'] : ''}}</div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    function showDissertativa(index){
        if(document.getElementById('respostaDissertativa'+index).style.display == 'none')
            document.getElementById('respostaDissertativa'+index).style.display ='flex';
        else
            document.getElementById('respostaDissertativa'+index).style.display ='none';
    }

    function showMultipla(index, correto){
        if(document.getElementById('resp'+index+''+correto).checked){
            document.getElementById('respostaMultipla'+index).style.display ='flex';
            document.getElementById('respostaMultiplaCorreta'+index).style.display ='flex';
            document.getElementById('respostaMultiplaErrada'+index).style.display ='none';
        }
        else{
            document.getElementById('respostaMultipla'+index).style.display ='flex';
            document.getElementById('respostaMultiplaCorreta'+index).style.display ='none';
            document.getElementById('respostaMultiplaErrada'+index).style.display ='block';
        }
    }
</script>