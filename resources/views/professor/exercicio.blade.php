<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script>
        function show(){
            document.getElementById('alternativas').style.display ='flex';
        }
        function hide(){
            document.getElementById('alternativas').style.display ='none';
        }
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible">
    <title>Literário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/conteudo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png">
</head>
<body>
    <nav class="navbar navbar-expand-lg nav-light" style="background-color: #2a659d; color:#fff; font-family: 'Oswald', sans-serif ">
        <a class="navbar-brand ml-3" href="/conteudo" style="font-family: 'Oswald', sans-serif; color:#fff; font-weight: bolder; font-size: larger;">
            <img src="{{ asset('img/logo2.png') }}" alt="foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;">
            Literário
        </a>
        <div class="navbar-brand ml-auto d-lg-none">
            <div class="d-flex flex-row">
                <div class="dropdown mr-3">
                    <button class="btn dropdown-toggle" type="button" id="dropdownConfig" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mt-1">notifications</i><span class="badge badge-dark">4</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownConfig">
                        <div class="card">
                            <div class="card-body">
                                Chat aqui
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/perfil"><img src="{{ asset('img/user1.png') }}" alt="foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;"></a>
            </div>
        </div>
        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-4 ml-lg-auto" id="navbarSupportedContent">
            <div class="ml-auto d-none d-lg-block">
                <div class="d-flex flex-row">
                    <div class="dropdown mr-3">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownConfigUl" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="background-color: #2a659d; color:#fff">
                            <i class="material-icons mt-1">notifications</i><span class="badge badge-dark">4</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownConfigUl">
                            <div class="card">
                                <div class="card-body">
                                    Chat aqui 
                                </div>
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <a href="/perfil"><img src="{{ asset('img/user1.png') }}" alt="foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;"></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row mx-5 my-4 h-100">
        <div class="w-100 col-lg-12">
            <!-- Conteúdo da página -->
            <div class="tab-content" id="v-nav-tabContent">
                <div class="container">
                    <h4 class="bg-light" style="padding: 10px; text-align: center">Exercícios</h4>
                    <button type="button" class="btn float-left mr-3" style="background-color: gray; color:#fff">
                        <i class="material-icons mt-1" data-toggle="modal" data-target="#AddModal2" data-whatever="DeleteSubsection">delete</i>
                    </button>
                    <button type="button" class="btn float-left mr-3" style="background-color: gray; color:#fff">
                      <i class="material-icons mt-1" data-toggle="modal" data-target="#AddModal3" data-whatever="Adicionar">add_box</i>
                    </button><br><br> 
                    
                    <!-- Cards com exes -->

                    <div class="card m-3">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Exercício 1 - Subseção: Vantagens AW2</label>
                                            <label>Com base em seu conhecimento, indique qual a melhor parte de desenvolver projetos para a disciplina de AW2.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Alternativas</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="resposta" id="resp1">
                                                    <label class="form-check-label" for="resp1">
                                                        Obter o precioso conhecimento na área das aplicações Web
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="resposta" id="resp2">
                                                    <label class="form-check-label" for="resp2" id="labelMult">
                                                        Lidar constantemente com o desenvolvimento sob pressão
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="resposta" id="resp3">
                                                    <label class="form-check-label" for="resp3" id="labelDiss">
                                                        Participar dos encontros síncronos com o docente
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="resposta" id="resp4">
                                                    <label class="form-check-label" for="resp4" id="labelMult">
                                                        Testar os limites da sanidade mental
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="resposta" id="resp5">
                                                    <label class="form-check-label" for="resp5" id="labelMult">
                                                        Aperfeiçoar a capacidade autodidata para aprender conteúdos nunca ensinados
                                                    </label>
                                                </div>
                                            </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row justify-content-end mt-4">
                                    <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff"><i data-toggle="modal" data-target="#AddModal1" data-whatever="Salvar">Salvar gabarito</i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card m-3">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Exercício 2 - Subseção: Mente discente</label>
                                            <label for="exampleFormControlTextarea1">Descreva, com a maior riqueza de detalhes possível, quais sensações e sentimentos você sente ao desenvolver projetos para a disiciplina de AW2.</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end mt-4">
                                    <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff"><i data-toggle="modal" data-target="#AddModal1" data-whatever="Salvar">Salvar gabarito</i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card m-3">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Exercício 3 - Subseção: Interpretando imagens</label>
                                            <label for="exampleFormControlTextarea2">Observando atentamente a imagem que segue, relacione os elementos nela presentes com o cotidiano do Instituto Federal.</label>
                                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                                <div class="card mb-4">
                                                    <img src="img/O_Grito.jpg" class="card-img-top" alt="Imagem do exercício">
                                                </div>
                                            </div>
                                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end mt-4">
                                    <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff"><i data-toggle="modal" data-target="#AddModal1" data-whatever="Salvar">Salvar gabarito</i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Modais -->

            <!-- Modal mensagem gabarito salvo -->
            <div class="modal fade" id="AddModal1" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="AddModalLabel">Salvar gabarito</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <label>Gabarito salvo com êxito!</label>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Modal deletar -->
            <div class="modal fade" id="AddModal2" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="AddModalLabel">Deletar exercício</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="delete-exe-select">Exercício</label>
                                <select class="form-control" id="delete-exe-select">
                                    <option>Exercício 1</option>
                                    <option>Exercício 2</option>
                                    <option>Exercício 3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-secondary float-right">Confirmar</button>
                        </form>
                      </div>
                  </div>
                </div>
            </div>

            <!-- Modal Adicionar -->
            <div class="modal fade" id="AddModal3" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="AddModalLabel">Adicionar exercício</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="textoEnunciado">Enunciado</label>
                                        <textarea class="form-control" id="textoEnunciado" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputNomeImg" placeholder="Nome da imagem">
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile" aria-describedby="inputGroupFileAddon">
                                            <label class="custom-file-label" for="inputGroupFile">Adicionar imagem</label>
                                        </div>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <fieldset class="form-group">
                                        <div class="row">
                                        <legend class="col-form-label col-sm-4 pt-0">Tipo de exercício</legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipoExe" id="radioDissertativo" onclick="hide();">
                                            <label class="form-check-label" for="radioDissertativo" id="labelDiss">
                                                Dissertativo
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipoExe" id="radioMultipla" onclick="show();" checked>
                                            <label class="form-check-label" for="radioMultipla" id="labelMult">
                                                Múltipla escolha
                                            </label>
                                            </div>
                                        </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="subsection-select">Subseção</label>
                                        <select class="form-control" id="subsection-select">
                                            <option>Vantagens AW2</option>
                                            <option>Mente discente</option>
                                            <option>Interpretando imagens</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4" id="alternativas" >
                                <div class="col">
                                    <label>Alternativas: </label>
                                    <button type="button" class="btn mr-3" style="background-color: #2a659d; color:#fff">
                                        <i class="material-icons mt-1">add_box</i>
                                    </button>
                                    <button type="button" class="btn mr-3" style="background-color: #2a659d; color:#fff">
                                        <i class="material-icons mt-1">reorder</i>
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-end mt-4">
                                    <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">Salvar</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- Fim modal adicionar exe -->

        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>