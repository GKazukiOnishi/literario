@extends('layout')

@section('conteudo')
    <!--conteúdo-->
    <div class="tab-content" id="v-nav-tabContent">
        @foreach ($menus as $menu)
            <div class="tab-pane fade show {{$loop->first?'active':''}}" id="v-nav-{{$menu['id']}}" role="tabpanel" aria-labelledby="v-nav-{{$menu['id']}}-tab">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col w-100">
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                <i class="material-icons mt-1" data-toggle="modal" data-target="#AddModal{{$loop->iteration}}" data-whatever="AddSubsection">add_box</i>
                            </button>
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                <i class="material-icons mt-1" data-toggle="modal" data-target="#DeleteModal{{$loop->iteration}}" data-whatever="DeleteSubsection">delete</i>
                            </button>
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                <a href="/exercicio/{{$idArea}}/{{$menu['id']}}/"><i class="material-icons mt-1">fitness_center</i></a>
                            </button>
                        </div>
                    </div>
                    @foreach ($menu['subsecao'] as $subsecao)
                        <div>
                            <h4 class="bg-light" style="padding: 10px; text-align: center">{{$subsecao['nome']}}</h4>
                            <button type="button" class="btn float-left mr-3" style="background-color: gray; color:#fff">
                            <i class="material-icons mt-1" data-toggle="modal" data-target="#AddConteudo{{$loop->parent->iteration.$loop->iteration}}" data-whatever="Adicionar">add_box</i>
                            </button><br><br>
                            @php
                                $linhas = [];
                                $aux = [];
                                $contador = 0;
                        
                                foreach($subsecao['conteudo'] as $index => $conteudo) {
                        
                                    
                                    if($contador == 3) {
                                        array_push($linhas,$aux);
                                        $aux = [];
                                        $contador = 0;
                                    }
                                    $conteudo['index'] = $index;
                                    array_push($aux,$conteudo);
                                    $contador++;
                                }
                                if(count($aux) != 0) {
                                    array_push($linhas,$aux);
                                }
                            
                            @endphp
                            
                            @foreach ($linhas as $linha)
        
                                <div class="row mb-lg-4 mb-2">
                                    @foreach ($linha as $conteudo)
                     
                                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"><b>{{$conteudo['nome']}}</b></h5>
                                                    <p class="card-text">{{$conteudo['descricao']}}</p>
                                                <form action="/conteudo/{{$idArea}}/{{$menu['id']}}/{{$subsecao['id']}}/{{$conteudo['id']}}/" method="GET">
                                                   
                                                        <button type="submit" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">cloud_download</i></button>
                                                    </form>
                                    
                                
                                                    <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff" data-toggle="modal" data-target="#EditConteudo{{$loop->parent->parent->parent->iteration.$loop->parent->parent->iteration.$conteudo['index']}}" data-whatever="Editar">
                                                        <i class="material-icons mt-1">edit</i>
                                                    </button>
                                                    
                                                    <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff" data-toggle="modal" data-target="#modalDeleteConteudo">
                                                        <i class="material-icons mt-1">delete</i>
                                                    </button>
                                                </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="EditConteudo{{$loop->parent->parent->parent->iteration.$loop->parent->parent->iteration.$conteudo['index']}}" tabindex="-1" role="dialog" aria-labelledby="EditConteudo{{$loop->parent->parent->parent->iteration.$loop->parent->parent->iteration.$conteudo['index']}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="AddModalLabel">Editar Conteúdo</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="/editarSecao/{{$conteudo['id']}}" method="POST" enctype="multipart/form-data">
                                                      @csrf
                                                    <div class="form-group">
                                                      <label for="name" class="col-form-label">Título:</label>
                                                    <input type="text" class="form-control" id="form-principal-name" name = "nome" value = "{{$conteudo['nome']}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label">Descrição:</label>
                                                        <input type="text" class="form-control" id="form-principal-name" name = "descricao"value = "{{$conteudo['descricao']}}">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="file" class="col-form-label">Arquivo</label>
                                                        <input type="file" class="form-control" id="form-principal-file" name="arq">
                                                    </div>
                                                    <button type="submit" class="btn btn-secondary float-right">Salvar</button>
                                                    </form>
                                                  </div>
                                              </div>
                                            </div>
                                        </div>


                                      



                                        <div class="modal fade" id="modalDeleteConteudo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Exclusão de arquivo</h5>
                                                  <form action="/deleteSecao/{{$conteudo['id']}}/{{$conteudo['id']}}" method="POST">
                                                    @csrf
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  Você tem certeza que deseja excluir {{$conteudo['nome']}}?
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                  <button type="submit" class="btn btn-primary">Excluir</button>
                                                </div>
                                            </form>
                                              </div>
                                            </div>
                                          </div>
                                 
                                    @endforeach
                                </div>
                                
                            @endforeach
                        </div>

                        <div class="modal fade" id="AddConteudo{{$loop->parent->iteration.$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="AddConteudo{{$loop->parent->iteration.$loop->iteration}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="AddModalLabel">Adicionar conteúdo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/conteudo/{{$idArea}}/{{$menu['id']}}/{{$subsecao['id']}}" method="POST" enctype="multipart/form-data" >
                                        @csrf 
                                        <div class="form-group">
                                        <label for="name" class="col-form-label">Título:</label>
                                        <input type="text" class="form-control" id="form-principal-name" name="nome">
                                        </div>
                                        <div class="form-group">
                                            <label for="desc" class="col-form-label">Descrição:</label>
                                            <input type="text" class="form-control" id="form-principal-desc" name="descricao">
                                        </div>
                                        <div class="form-group">
                                            <label for="file" class="col-form-label">Arquivo:</label>
                                            <input type="file" class="form-control" id="form-principal-file" name="arquivo">
                                        </div>
                                        <button type="submit" class="btn btn-secondary float-right">Salvar</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="modal fade" id="AddModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="AddModal{{$loop->iteration}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddModalLabel">Crie uma nova subseção de conteúdo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/conteudo/{{$idArea}}/{{$menu['id']}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Nome:</label>
                                        <input type="text" class="form-control" id="form-principal-name" name="nome">
                                    </div>
                                    <button type="submit" class="btn btn-secondary float-right">Salvar</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="DeleteModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="DeleteModal{{$loop->iteration}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddModalLabel">Deletar subseção</h5>
                                <br>
                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <label for="recipient-name" class="col-form-label text-danger">Fique Atento! Se você apagar essa subseção todos os arquivos relacionados a ela serão apagados!</label>
                            <form action="/delete/{{$idArea}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Subseções</label>
                                    <select class="form-control" id="form-principal-select" name = "subcecoes">
                                        @foreach ($menu['subsecao'] as $subsecao)
                                    <option value = {{$subsecao['id']}}>{{$subsecao['nome']}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <button type="submit" class="btn btn-secondary float-right" data-toggle="modal" data-target="#modalDeleteConteudo">Salvar</button>
                                </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
    
        @endforeach
    </div>
@endsection