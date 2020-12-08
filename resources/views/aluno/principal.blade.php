@extends('layout')

@section('conteudo')
    <!--conteúdo-->
    <div class="tab-content" id="v-nav-tabContent">
        @foreach ($menus as $menu)
            <div class="tab-pane fade show {{$loop->first?'active':''}}" id="v-nav-{{$menu['id']}}" role="tabpanel" aria-labelledby="v-nav-{{$menu['id']}}-tab">
                <div class="container">
                    @if ($menu['nome'] == 'Estatística')
                        <div class="row mb-lg-4 mb-2">
                            <div class="col-12 mb-4 mb-lg-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Conteúdos mais acessados</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Conteúdo</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">%Acesso</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="align-middle" scope="row">1</th>
                                                        <td class="align-middle">As dez classes gramaticais</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">60%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">2</th>
                                                        <td class="align-middle">Romantismo</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">50%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">3</th>
                                                        <td class="align-middle">Acentuação</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">40%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 mb-4 mb-lg-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Lista de exercícios realizadas</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Lista</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">%Feita</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="align-middle" scope="row">1</th>
                                                        <td class="align-middle">Lista de crase</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">60%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">2</th>
                                                        <td class="align-middle">Lista sobre poemas</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">50%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">3</th>
                                                        <td class="align-middle">Lista de Claro Enigma</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">40%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 mb-4 mb-lg-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Rendimento nas redações</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Conteúdo</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">%Rendimento</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="align-middle" scope="row">1</th>
                                                        <td class="align-middle">Meio Ambiente</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">50%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">2</th>
                                                        <td class="align-middle">Sociedade</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">80%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">3</th>
                                                        <td class="align-middle">Cultura</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">75%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    @else
                        @if ($menu['nome'] == 'Redação')
                            <h4 class="bg-light" style="padding: 10px; text-align: center">Propostas de redação</h4>
                        @endif
                        <div class="row mb-4">
                            <div class="col w-100">
                                <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                    <i class="material-icons mt-1">reorder</i>
                                </button>
                            </div>
                        </div>
                        <div class="row mb-lg-4 mb-2">
                            @foreach ($menu['conteudo'] as $conteudo)
                                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                    <div class="card">
                                        <img src="{{$conteudo['img']}}" class="card-img-top" alt="Imagem {{$conteudo['nome']}}" width="230"
                                            height="230">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>{{$conteudo['nome']}}</b></h5>
                                            <p class="card-text">{{$conteudo['descricao']}}</p>
                                            <a href="/conteudo/{{$menu['id']}}" class="btn btn-sm float-right mr-3"
                                                style="background-color: #2a659d; color:#fff"><i
                                                    class="material-icons mt-1">chevron_right</i></a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection