
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
    <link rel="shortcut icon" href="img/logo.png">
  
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
                    <a href="/perfil"><img src="i{{ asset('img/user1.png') }}" alt="foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;"></a>
                </div>
            </div>
        </div>
    </nav>

    
    <div class="row mx-5 my-4 h-100">
        <!--menu lateral-->
        <div class="w-100 col-lg-2 mb-4 mb-lg-0">
            <div class="card mx-0">
                <div class="card-body">
                    <div class="nav flex-lg-column nav-pills nav-justified" id="v-nav-estatistica-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-item nav-link active bg-light" id="v-nav-home-tab" data-toggle="pill" href="#v-nav-estatistica" role="tab"
                            aria-controls="v-nav-home" aria-selected="false">
                            <div class="d-flex flex-column justify-content-center">
                                <i class="material-icons mt-1" style="color: #2a659d">timeline</i>
                                <small style="color: #2a659d">Estatísticas</small>
                            </div>
                        </a>
                        <a class="nav-item nav-link bg-light" id="v-nav-home-tab" data-toggle="pill" href="#v-nav-home" role="tab"
                            aria-controls="v-nav-home" aria-selected="true">
                            <div class="d-flex flex-column justify-content-center" >
                                <i class="material-icons mt-1" style="color: #2a659d">book</i>
                                <small style="color: #2a659d">Literatura</small>
                            </div>
                        </a>
                        <a class="nav-item nav-link bg-light" id="v-nav-profile-tab" data-toggle="pill" href="#v-nav-profile" role="tab"
                            aria-controls="v-nav-profile" aria-selected="false">
                            <div class="d-flex flex-column justify-content-center">
                                <i class="material-icons mt-1" style="color: #2a659d">format_quote</i>
                                <small style="color: #2a659d">Gramática</small>
                            </div>
                        </a>
                        <a class="nav-item nav-link bg-light" id="v-nav-messages-tab" data-toggle="pill" href="#v-nav-messages" role="tab"
                            aria-controls="v-nav-messages" aria-selected="false">
                            <div class="d-flex flex-column justify-content-center">
                                <i class="material-icons mt-1" style="color: #2a659d">format_align_justify</i>
                                <small style="color: #2a659d">Redação</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--conteúdo-->
        <div class="w-100 col-lg-10">
            <div class="tab-content" id="v-nav-tabContent">
                <!--estatísticas-->
                <div class="tab-pane fade show active"  id="v-nav-estatistica" role="tabpanel" aria-labelledby="v-nav-estatistica-tab">
                    <div class="container">
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
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">60%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">2</th>
                                                        <td class="align-middle">Romantismo</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">50%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">3</th>
                                                        <td class="align-middle">Acentuação</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
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
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">60%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">2</th>
                                                        <td class="align-middle">Lista sobre poemas</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">50%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">3</th>
                                                        <td class="align-middle">Lista de Claro Enigma</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
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
                                                        <th scope="col">Assunto</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">%Rendimento</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="align-middle" scope="row">1</th>
                                                        <td class="align-middle">Meio Ambiente</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">50%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">2</th>
                                                        <td class="align-middle">Sociedade</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">80%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">3</th>
                                                        <td class="align-middle">Cultura</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
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
                    </div>
                </div>
                <!--literatura-->
                <div class="tab-pane fade" id="v-nav-home" role="tabpanel" aria-labelledby="v-nav-home-tab">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col w-100">
                                <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                    <i class="material-icons mt-1">reorder</i>
                                </button>
                            </div>
                        </div>
                        <div class="row mb-lg-4 mb-2">
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/trovadorismo.jpg" class="card-img-top" alt="Imagem trovadorismo" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Trovadorismo</b></h5>
                                        <p class="card-text">Escola literária de .........................................</p>
                                        <a href="conteudo_literatura_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/humanismo.jpg" class="card-img-top" alt="Imagem humanismo" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Humanismo</b></h5>
                                        <p class="card-text">Escola literária de .........................................</p>
                                        <a href="conteudo_literatura_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/quinhentismo.jpg" class="card-img-top" alt="Imagem quinhentismo" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Quinhentismo</b></h5>
                                        <p class="card-text">Escola literária de .........................................</p>
                                        <a href="conteudo_literatura_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <!--gramática-->
                <div class="tab-pane fade" id="v-nav-profile" role="tabpanel" aria-labelledby="v-nav-profile-tab">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col w-100">
                                <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                    <i class="material-icons mt-1">reorder</i>
                                </button>
                            </div>
                        </div>
                        <div class="row mb-lg-4 mb-2">
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/classes-gramaticais.jpg" class="card-img-top" alt="classes gramaticais" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Classes Gramaticais</b></h5>
                                        <p class="card-text">as dez classes gramaticais........</p>
                                        <a href="conteudo_gramatica_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/acentos.jpg" class="card-img-top" alt="acentos" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Ortografia e Acentuação</b></h5>
                                        <p class="card-text">tudo sobre ortografia e acentuação.....</p>
                                        <a href="conteudo_gramatica_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/sintaxe.jpg" class="card-img-top" alt="sintaxe" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Sintaxe</b></h5>
                                        <p class="card-text">componentes, exemplos........</p>
                                        <a href="conteudo_gramatica_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--redação-->
                <div class="tab-pane fade" id="v-nav-messages" role="tabpanel" aria-labelledby="v-nav-messages-tab"><div class="container">
                    <h4 class="bg-light" style="padding: 10px; text-align: center">Propostas de redação</h4>
                    <div class="row mb-4">
                        <div class="col w-100">
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                <i class="material-icons mt-1">reorder</i>
                            </button>
                        </div>
                    </div>
                    <div class="row mb-lg-4 mb-2">
                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <img src="img/meio-ambiente.jpg" class="card-img-top" alt="Desenvolvimento ou preservação?" width="230" height="230">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Meio ambiente</b></h5>
                                    <p class="card-text">Desenvolvimento econômico ou preservação ecológica?</p>
                                    <a href="conteudo_redacao_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <img src="img/racismo.jpg" class="card-img-top" alt="Inclusão social" width="230" height="230">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Sociedade</b></h5>
                                    <p class="card-text">Importância de políticas públicas no combate ao racismo</p>
                                    <a href="conteudo_redacao_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <img src="img/teatro.jpg" class="card-img-top" alt="Teatro" width="230" height="230">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Cultura</b></h5>
                                    <p class="card-text">A democratização do acesso ao teatro</p>
                                    <a href="conteudo_redacao_aluno.html" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
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