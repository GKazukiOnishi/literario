@extends('layout')

@section('conteudo')
    <!--conteúdo-->
    <div class="tab-content" id="v-nav-tabContent">
        @foreach ($menus as $menu)
            <div class="tab-pane fade show {{$loop->first?'active':''}}" id="v-nav-{{$menu['nome']}}" role="tabpanel" aria-labelledby="v-nav-{{$menu['nome']}}-tab">
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
                                <a href="form_exercicio.html"><i class="material-icons mt-1">fitness_center</i></a>
                            </button>
                        </div>
                    </div>
                    <h4 class="bg-light" style="padding: 10px; text-align: center">Subseção</h4>
                    <button type="button" class="btn float-left mr-3" style="background-color: gray; color:#fff">
                    <i class="material-icons mt-1" data-toggle="modal" data-target="#AddConteudo{{$loop->iteration}}" data-whatever="Adicionar">add_box</i>
                    </button><br><br>
                    <div class="modal fade" id="AddModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddModalLabel">Crie uma nova subseção de conteúdo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nome:</label>
                                    <input type="text" class="form-control" id="form-principal-name">
                                </div>
                                <button type="submit" class="btn btn-secondary float-right">Salvar</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="modal fade" id="DeleteModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddModalLabel">Deletar subseção</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Subseções</label>
                                    <select class="form-control" id="form-principal-select">
                                        <option>lista com subseções</option>
                                    </select>
                                    </div>
                                    <button type="submit" class="btn btn-secondary float-right">Salvar</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="modal fade" id="AddConteudo{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddModalLabel">Adicionar conteúdo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Título:</label>
                                    <input type="text" class="form-control" id="form-principal-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc" class="col-form-label">Descrição:</label>
                                        <input type="text" class="form-control" id="form-principal-desc">
                                    </div>
                                    <div class="form-group">
                                        <label for="file" class="col-form-label">Arquivo:</label>
                                        <input type="file" class="form-control" id="form-principal-file">
                                    </div>
                                    <button type="submit" class="btn btn-secondary float-right">Salvar</button>
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