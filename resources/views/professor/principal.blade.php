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
                                        <h5 class="card-title">Conteúdos com mais dúvidas</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Conteúdo</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">%Dúvida</th>
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
                                        <h5 class="card-title">Lista com maiores taxas de erro</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Lista</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">%Erro</th>
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
                                        <h5 class="card-title">Conteúdos mais curtidos</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Conteúdo</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">Curtidas</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="align-middle" scope="row">1</th>
                                                        <td class="align-middle">As dez classes gramaticais</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">500</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">2</th>
                                                        <td class="align-middle">Romantismo</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">200</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">3</th>
                                                        <td class="align-middle">Acentuação</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm"
                                                                style="background-color: #2a659d; color:#fff"><i
                                                                    class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">150</td>
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
                                    <i class="material-icons mt-1" data-toggle="modal" data-target="#AddModal{{$loop->iteration}}"
                                        data-whatever="Adicionar">add_box</i>
                                </button>
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
                                            <button type="button" class="btn btn-sm float-right mr-3"
                                                style="background-color: #2a659d; color:#fff">
                                                <i class="material-icons mt-1">edit</i>
                                            </button>
                                            <button type="button" class="btn btn-sm float-right mr-3"
                                                style="background-color: #2a659d; color:#fff">
                                                <i class="material-icons mt-1">delete</i>
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            @endforeach
                        </div>
                        @if ($menu['nome'] == 'Redação')
                            <h4 class="bg-light" style="padding: 10px; text-align: center">Entregas de alunos</h4>
                            <div class="container">
                                <div class="row mb-lg-4 mb-2">
                                    <div class="col-12 mb-4 mb-lg-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Redações</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-hover mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Aluno</th>
                                                                <th scope="col">Tema</th>
                                                                <th scope="col">Comentários</th>
                                                                <th scope="col" class="text-center">Pontuação</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="table-danger">
                                                                <td class="align-middle">Osvaldo Andrade</td>
                                                                <td class="align-middle">Meio ambiente</td>
                                                                <td class="align-middle">(Sem correção)</td>
                                                                <td class="text-center align-middle">Pendente</td>
                                                                <td class="align-middle"><a href="/redacao/1/1"
                                                                        class="btn btn-sm float-right mr-3"
                                                                        style="background-color: #2a659d; color:#fff"><i
                                                                            class="material-icons mt-1">chevron_right</i></a></td>
                                                            </tr>
                                                            <tr class="table-danger">
                                                                <td class="align-middle">Carla Drummond</td>
                                                                <td class="align-middle">Cultura</td>
                                                                <td class="align-middle">(Sem correção)</td>
                                                                <td class="text-center align-middle">Pendente</td>
                                                                <td class="align-middle"><a href="/redacao/1/1"
                                                                        class="btn btn-sm float-right mr-3"
                                                                        style="background-color: #2a659d; color:#fff"><i
                                                                            class="material-icons mt-1">chevron_right</i></a></td>
                                                            </tr>
                                                            <tr class="table-danger">
                                                                <td class="align-middle">Osvaldo Andrade</td>
                                                                <td class="align-middle">Cultura</td>
                                                                <td class="align-middle">(Sem correção)</td>
                                                                <td class="text-center align-middle">Pendente</td>
                                                                <td class="align-middle"><a href="/redacao/1/1"
                                                                        class="btn btn-sm float-right mr-3"
                                                                        style="background-color: #2a659d; color:#fff"><i
                                                                            class="material-icons mt-1">chevron_right</i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">Anita Benfatti</td>
                                                                <td class="align-middle">Meio ambiente</td>
                                                                <td class="align-middle">Boa tese. Corrigir argumento 2 (linha 14)</td>
                                                                <td class="text-center align-middle">85/100</td>
                                                                <td class="align-middle"><a href="/redacao/1/1"
                                                                        class="btn btn-sm float-right mr-3"
                                                                        style="background-color: #2a659d; color:#fff"><i
                                                                            class="material-icons mt-1">chevron_right</i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">Carla Drummond</td>
                                                                <td class="align-middle">Meio ambiente</td>
                                                                <td class="align-middle">Falha de regência (linha 7). Boa abordagem</td>
                                                                <td class="text-center align-middle">90/100</td>
                                                                <td class="align-middle"><a href="/redacao/1/1"
                                                                        class="btn btn-sm float-right mr-3"
                                                                        style="background-color: #2a659d; color:#fff"><i
                                                                            class="material-icons mt-1">chevron_right</i></a></td>
                                                            </tr>
            
                                                            <tr>
                                                                <td class="align-middle">Osvaldo Andrade</td>
                                                                <td class="align-middle">Sociedade</td>
                                                                <td class="align-middle">Ótima argumentação!</td>
                                                                <td class="text-center align-middle">100/100</td>
                                                                <td class="align-middle"><a href="/redacao/1/1"
                                                                        class="btn btn-sm float-right mr-3"
                                                                        style="background-color: #2a659d; color:#fff"><i
                                                                            class="material-icons mt-1">chevron_right</i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">Carla Drummond</td>
                                                                <td class="align-middle">Sociedade</td>
                                                                <td class="align-middle">Erro ortográfico (linha 12). Boa tese</td>
                                                                <td class="text-center align-middle">90/100</td>
                                                                <td class="align-middle"><a href="/redacao/1/1"
                                                                        class="btn btn-sm float-right mr-3"
                                                                        style="background-color: #2a659d; color:#fff"><i
                                                                            class="material-icons mt-1">chevron_right</i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-middle">Anita Benfatti</td>
                                                                <td class="align-middle">Cultura</td>
                                                                <td class="align-middle">Perfeita argumentação!</td>
                                                                <td class="text-center align-middle">100/100</td>
                                                                <td class="align-middle"><a href="/redacao/1/1"
                                                                        class="btn btn-sm float-right mr-3"
                                                                        style="background-color: #2a659d; color:#fff"><i
                                                                            class="material-icons mt-1">chevron_right</i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="modal fade" id="AddModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="AddModal{{$loop->iteration}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="AddModalLabel">Crie uma nova seção</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/conteudo/{{$menu['id']}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="form-principal-nome" class="col-form-label">Nome:</label>
                                                <input name="nome" id="form-principal-nome" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="form-principal-desc" class="col-form-label">Descrição:</label>
                                                <input name="descricao" type="text" id="form-principal-desc" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="form-principal-file" class="col-form-label">Imagem:</label>
                                                <input name="img" type="file" id="form-principal-file" class="form-control">
                                            </div>
                                            <input type="hidden" value="{{$loop->index}}" name="menu">
                                            <button type="submit" class="btn btn-secondary float-right">Salvar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection