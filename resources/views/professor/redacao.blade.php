<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible">
    <title>Literário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
</head>

<body>
<!--navbar-->
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

<div class="container mt-3">
    <h4 class="bg-light" style="padding: 10px; text-align: center">Correção de redação</h4>


    <div class="row mx-5 my-4 h-100 justify-content-center align-items-center">
    <!-- <div class="row mx-5 my-4 h-100"> -->

        <div class="w-100 col-lg-3 mb-4 mt-4">
            <div class="card mx-0">
                <div class="card-body">
                    <h5 class="card-title">Tema: Poesia</h5>
                    <!-- Não precisa escrever "Tema:". Só colocar direto o nome do tema no título -->
                    <p class="card-text">Aluno: Mário Quartana</p>
                    <p class="card-text">Última alteração: 30/02/2020</p>
                    <div class="row justify-content-center mt-4">
                        <button type="button" class="btn float-right" style="background-color: #2a659d; color:#fff">Baixar redação</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 col-lg-9 mb-4 mt-4">
            <div class="card mx-0">
                <div class="card-body">
                    <form>
                        <h5 class="card-title">Feedback</h5>
                        <div class="mb-3">
                            <label for="textoComentario">Comentário:</label>
                            <textarea class="form-control" id="textoComentario" rows="4"></textarea>
                        </div>               
                        

                        <div class="input-group mb-3 col-lg-5 pl-0">
                            <input type="number" max="100" class="form-control" placeholder="Pontuação">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">/100</span>
                            </div>
                        </div>

                        <div class="row justify-content-end mt-4">
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff"><i data-toggle="modal" data-target="#AddModal1" data-whatever="Salvar">Salvar correção</i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="AddModal1" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="AddModalLabel">Salvar correção</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <label>Feedback salvo com êxito!</label>
        </div>
      </div>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>



<!--Versão 2: substituir tudo após o nav <div class="container mt-3">
    <h4 class="bg-light" style="padding: 10px; text-align: center">Correção de redação</h4>


    <div class="row mx-5 my-4 h-100 justify-content-center align-items-center">

        <div class="w-100 mb-4 mt-4">
            <div class="card mx-0">
                <div class="card-body">
                    <div class="row mx-5 my-4 h-100 justify-content-center align-items-center">
                        <div class="w-100 col-lg-6">
                            <h5 class="card-title">Tema: Poesia</h5>
                            <p class="card-text">Aluno: Mário Quartana</p>
                            <p class="card-text">Última alteração: 30/02/2020</p>
                        </div>
                        <div class="w-100 col-lg-6">
                            <div class="row justify-content-end">
                                <button type="button" class="btn float-right" style="background-color: #2a659d; color:#fff">Baixar redação</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 mb-4 mt-4">
            <div class="card mx-0">
                <div class="card-body">
                    <h5 class="card-title">Feedback</h5>
                    <div class="mb-3">
                        <label for="textoComentario">Comentário:</label>
                        <textarea class="form-control" id="textoComentario" rows="4"></textarea>
                    </div>               
                    

                    <div class="input-group mb-3 col-lg-5 pl-0">
                        <input type="number" max="100" class="form-control" placeholder="Pontuação">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">/100</span>
                        </div>
                    </div>

                    <div class="row justify-content-end mt-4">
                        <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">Salvar correção</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> -->