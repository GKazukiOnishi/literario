<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible">
    <title>Literário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/conteudo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
  
</head>
<body>
    <nav class="navbar navbar-expand-lg nav-light" style="background-color: #2a659d; color:#fff; font-family: 'Oswald', sans-serif ">
        <a class="navbar-brand ml-3" href="/conteudo" style="font-family: 'Oswald', sans-serif; color:#fff; font-weight: bolder; font-size: larger;">
            <img src="{{ asset('img/logo2.png') }}" alt="foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;">
            Literatura
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
        <!--menu lateral-->
        <div class="w-100 col-lg-2 mb-4 mb-lg-0">
            <div class="card mx-0">
                <div class="card-body">
                    <div class="nav flex-lg-column nav-pills nav-justified" id="v-nav-trovadorismo-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-item nav-link active bg-light" id="v-nav-humanismo-tab" data-toggle="pill" href="#v-nav-trovadorismo" role="tab"
                            aria-controls="v-nav-humanismo" aria-selected="false">
                            <div class="d-flex flex-column justify-content-center">
                                <i class="material-icons mt-1" style="color: #2a659d">book</i>
                                <small style="color: #2a659d">Trovadorismo</small>
                            </div>
                        </a>
                        <a class="nav-item nav-link bg-light" id="v-nav-humanismo-tab" data-toggle="pill" href="#v-nav-humanismo" role="tab"
                            aria-controls="v-nav-humanismo" aria-selected="true">
                            <div class="d-flex flex-column justify-content-center" >
                                <i class="material-icons mt-1" style="color: #2a659d">book</i>
                                <small style="color: #2a659d">Humanismo</small>
                            </div>
                        </a>
                        <a class="nav-item nav-link bg-light" id="v-nav-quinhentismo-tab" data-toggle="pill" href="#v-nav-quinhentismo" role="tab"
                            aria-controls="v-nav-quinhentismo" aria-selected="false">
                            <div class="d-flex flex-column justify-content-center">
                                <i class="material-icons mt-1" style="color: #2a659d">book</i>
                                <small style="color: #2a659d">Quinhentismo</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 col-lg-10">
            <div class="tab-content" id="v-nav-tabContent">
                <div class="tab-pane fade show active" id="v-nav-trovadorismo" role="tabpanel" aria-labelledby="v-nav-trovadorismo-tab">
                    <div class="container">
                    <div class="row mb-4">
                        <div class="col w-100">
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                <a href="/exercicio/1/1"><i class="material-icons mt-1">fitness_center</i></a>
                            </button>
                        </div>
                    </div>
                    <h4 class="bg-light" style="padding: 10px; text-align: center">Subseção</h4>
                    <br><br>
                    <div class="row mb-lg-4 mb-2">
                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Título</b></h5>
                                    <p class="card-text">descrição</p>
                                    <a href="#download" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                </div>
                            </div> 
                        </div>
                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Título</b></h5>
                                    <p class="card-text">descrição</p>
                                    <a href="#download" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                </div>
                            </div> 
                        </div>
                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Título</b></h5>
                                    <p class="card-text">descrição</p>
                                    <a href="#download" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane fade show" id="v-nav-humanismo" role="tabpanel" aria-labelledby="v-nav-humanismo-tab">
                    <div class="container">
                    <div class="row mb-4">
                        <div class="col w-100">
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                <a href="/exercicio/1/1"><i class="material-icons mt-1">fitness_center</i></a>
                            </button>
                        </div>
                    </div>
                    <h4 class="bg-light" style="padding: 10px; text-align: center">Subseção</h4>
                    </div>
                </div>
                <div class="tab-pane fade show" id="v-nav-quinhentismo" role="tabpanel" aria-labelledby="v-nav-quinhentismo-tab">
                    <div class="container">
                    <div class="row mb-4">
                        <div class="col w-100">
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                <a href="/exercicio/1/1"><i class="material-icons mt-1">fitness_center</i></a>
                            </button>
                        </div>
                    </div>
                    <h4 class="bg-light" style="padding: 10px; text-align: center">Subseção</h4>
                    </div>
                </div>
            </div>
        </div>
     
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>