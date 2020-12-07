@extends('layout')

@section('conteudo')
    <!--conteúdo-->
    <div class="tab-content" id="v-nav-tabContent">
        @foreach ($menus as $menu)
            <div class="tab-pane fade show {{$loop->first?'active':''}}" id="v-nav-{{$menu['id']}}" role="tabpanel" aria-labelledby="v-nav-{{$menu['id']}}-tab">
                <div class="container">
                    @if ($idArea == 3)
                        <div class="row justify-content-end mb-4">
                            <div class="col-6 w-100">
                                <p>Fazer upload da redação:</p>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                        <label class="custom-file-label" for="inputGroupFile04">Escolher arquivo</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04" style="background-color: #2a659d; color:#fff">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row mb-4">
                            <div class="col w-100">
                                <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                    <a href="/exercicio/{{$idArea}}/{{$menu['id']}}/"><i class="material-icons mt-1">fitness_center</i></a>
                                </button>
                            </div>
                        </div>
                    @endif
                    @foreach ($menu['subsecao'] as $subsecao)
                        <div>
                            <h4 class="bg-light" style="padding: 10px; text-align: center">{{$subsecao['nome']}}</h4><br><br>
                            <div class="row mb-lg-4 mb-2">
                                @foreach ($subsecao['conteudo'] as $conteudo)
                                    <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>{{$conteudo['nome']}}</b></h5>
                                                <p class="card-text">{{$conteudo['descricao']}}</p>
                                                <form action="/conteudo/{{$idArea}}/{{$menu['id']}}/{{$subsecao['id']}}/{{$conteudo['id']}}" method="GET">
                                                    <button type="submit" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">cloud_download</i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    @if ($idArea == 3)
                        <h4 class="bg-light mt-5" style="padding: 10px; text-align: center">Correção do professor</h4>
                        <div class="container">
                            <div class="row mb-lg-4 mb-2">
                                <div class="col-12 mb-4 mb-lg-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Feedback</h5>
                                            <div class="row mt-4">
                                                <div class="col-12">
                                                    <p>Comentário do professor:</p>
                                                    <div class="conteiner col-12 rounded border mt-3 mb-3 ml-2" style="background-color:#d9edf7;">
                                                        <p class="mt-3">Ótimo desenvolvimento. Abordou corretamente todos os tópicos obrigatórios e demonstrou domínio sobre o tema. Corrigir terceiro parágrafo, linha 3: substituir "Portanto" por "Apesar".</p>
                                                    </div>
                                                    <p>Pontuação obtida:</p>
                                                    <div class="input-group mb-3 col-lg-2 pl-0 ml-2">
                                                        <input type="text" class="form-control" placeholder="Pontuação" value="92" id="inputPuntuacao" disabled style="background-color: #fff;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">/100</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection