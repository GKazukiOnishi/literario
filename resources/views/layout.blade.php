<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/principal.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg nav-light" style="background-color: #2a659d; color:#fff; font-family: 'Oswald', sans-serif ">
        <a class="navbar-brand ml-3" href="/" style="font-family: 'Oswald', sans-serif; color:#fff; font-weight: bolder; font-size: larger;">
            <img src="{{ asset('img/logo2.png') }}" alt="Foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;">
            {{env('APP_NAME')}}
        </a>
        <div class="navbar-brand ml-auto d-lg-none">
            <div class="d-flex flex-row">
                <div class="dropdown mr-3">
                    <button class="btn dropdown-toggle" type="button" id="dropdownConfig" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons mt-1">notifications</i><span class="badge badge-dark">{{$qtdNotificacoes}}</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownConfig">
                        <div class="card">
                            <div class="card-body">
                                Chat aqui
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/perfil"><img src="{{ asset('img/user1.png') }}" alt="Foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;"></a>
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
                            <i class="material-icons mt-1">notifications</i><span class="badge badge-dark">{{$qtdNotificacoes}}</span>
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
                    <a href="/perfil"><img src="img/user1.png" alt="Foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;"></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row mx-5 my-4 h-100">
        <div class="w-100 col-lg-2 mb-4 mb-lg-0">
            <div class="card mx-0">
                <div class="card-body">
                    <div class="nav flex-lg-column nav-pills nav-justified " id="v-nav-estatistica-tab" role="tablist" aria-orientation="vertical">
                        @foreach ($menus as $menu)
                            <a class="nav-item nav-link active bg-light" id="v-nav-{{$menu['nome']}}-tab" data-toggle="pill" href="#v-nav-{{$menu['nome']}}" role="tab"
                                aria-controls="v-nav-{{$menu['nome']}}" aria-selected="false">
                                <div class="d-flex flex-column justify-content-center">
                                    <i class="material-icons mt-1" style="color: #2a659d">{{$menu['icone']}}</i>
                                    <small style="color: #2a659d">{{$menu['nome']}}</small>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 col-lg-10">
            <div class="tab-content" id="v-nav-tabContent">
                <div class="tab-pane fade show active"  id="v-nav-estatistica" role="tabpanel" aria-labelledby="v-nav-estatistica-tab">
                    <div class="container">
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
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">500</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">2</th>
                                                        <td class="align-middle">Romantismo</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">200</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle" scope="row">3</th>
                                                        <td class="align-middle">Acentuação</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
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
                    </div>
                </div>
                <div class="tab-pane fade" id="v-nav-home" role="tabpanel" aria-labelledby="v-nav-home-tab">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col w-100">
                                <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                    <i class="material-icons mt-1">add_box</i>
                                </button>
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
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
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
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
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
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/barroco.jpg" class="card-img-top" alt="Imagem barroco" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Barroco</b></h5>
                                        <p class="card-text">Escola literária de .........................................</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/arcadismo.jpg" class="card-img-top" alt="Imagem arcadismo" width="230" height="230">
                                    <div class="card-body">
                                      <h5 class="card-title"><b>Arcadismo</b></h5>
                                      <p class="card-text">Escola literária de .........................................</p>
                                      <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                      <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                          <i class="material-icons mt-1">edit</i>
                                      </button>
                                      <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                          <i class="material-icons mt-1">delete</i>
                                      </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/romantismo.jpg" class="card-img-top" alt="Imagem romantismo">
                                    <div class="card-body">
                                      <h5 class="card-title"><b>Romantismo</b></h5>
                                      <p class="card-text">Escola literária de .........................................</p>
                                      <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                      <button type="button" class="btn btn-sm float-right mr-3"style="background-color: #2a659d; color:#fff" >
                                          <i class="material-icons mt-1">edit</i>
                                      </button>
                                      <button type="button" class="btn btn-sm float-right mr-3"style="background-color: #2a659d; color:#fff" >
                                          <i class="material-icons mt-1">delete</i>
                                      </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/realismo.jpg" class="card-img-top" alt="Imagem realismo" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Realismo e Naturalismo</b></h5>
                                        <p class="card-text">Escola literária de .........................................</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/parnasianismo.jpg" class="card-img-top" alt="Imagem parnasianismo" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Parnasianismo</b></h5>
                                        <p class="card-text">Escola literária de .........................................</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/simbolismo.jpg" class="card-img-top" alt="Imagem simbolismo" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Simbolismo</b></h5>
                                        <p class="card-text">Escola literária de .........................................</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/pre-modernismo.jpg" class="card-img-top" alt="Imagem pré-modernismo" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Pré-Modernismo</b></h5>
                                        <p class="card-text">Período de transição literária .........................................</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/modernismo.jpg" class="card-img-top" alt="Imagem modernismo" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Modernismo</b></h5>
                                        <p class="card-text">Escola literária de .........................................</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-nav-profile" role="tabpanel" aria-labelledby="v-nav-profile-tab">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col w-100">
                                <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                    <i class="material-icons mt-1">add_box</i>
                                </button>
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
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
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
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/sintaxe.jpg" class="card-img-top" alt="sintaxe" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Sintaxe</b></h5>
                                        <p class="card-text">componentes, exemplos........</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/concordancia.jpg" class="card-img-top" alt="classes gramaticais" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Concordância</b></h5>
                                        <p class="card-text">concordância verbal e nominal........</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/regencia.jpg" class="card-img-top" alt="classes gramaticais" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Regência</b></h5>
                                        <p class="card-text">regência verbal e nominal........</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/figuras.jpg" class="card-img-top" alt="classes gramaticais" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Figuras de Linguagem</b></h5>
                                        <p class="card-text">figuras semânticas e sintáticas..</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/funcoes.png" class="card-img-top" alt="classes gramaticais" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Funções da Linguagem</b></h5>
                                        <p class="card-text">emotiva, fática, conativa, poética, referencial e metalinguística..</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="img/redação.jpg" class="card-img-top" alt="redação" width="230" height="230">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Conteúdo para Redação</b></h5>
                                        <p class="card-text">tese, argumentação, conclusão, formatos........</p>
                                        <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                            <i class="material-icons mt-1">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-nav-messages" role="tabpanel" aria-labelledby="v-nav-messages-tab"><div class="container">
                    <h4 class="bg-light" style="padding: 10px; text-align: center">Propostas de redação</h4>
                    <div class="row mb-4">
                        <div class="col w-100">
                            <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">
                                <i class="material-icons mt-1">add_box</i>
                            </button>
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
                                    <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                        <i class="material-icons mt-1">edit</i>
                                    </button>
                                    <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                        <i class="material-icons mt-1">delete</i>
                                    </button>
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
                                    <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                        <i class="material-icons mt-1">edit</i>
                                    </button>
                                    <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                        <i class="material-icons mt-1">delete</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <img src="img/teatro.jpg" class="card-img-top" alt="Teatro" width="230" height="230">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Cultura</b></h5>
                                    <p class="card-text">A democratização do acesso ao teatro</p>
                                    <a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a>
                                    <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                        <i class="material-icons mt-1">edit</i>
                                    </button>
                                    <button type="button" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff">
                                        <i class="material-icons mt-1">delete</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="bg-light" style="padding: 10px; text-align: center">Entregas de alunos</h4>
                    <div class="container">
                        <div class="row mb-lg-4 mb-2">
                            <div class="col-12 mb-4 mb-lg-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Tema: Desenvolvimento econômico ou preservação ecológica?</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Aluno</th>
                                                        <th scope="col">Comentários</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">Nota</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-middle">Anita Benfatti</td>
                                                        <td class="align-middle">Boa tese. Corrigir argumento 2 (linha 14)</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">85/100</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle">Carla Drummond</td>
                                                        <td class="align-middle">Falha de regência (linha 7). Boa abordagem</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">90/100</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle">Osvaldo Andrade</td>
                                                        <td class="align-middle">(Sem correção)</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">Pendente</td>
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
                                        <h5 class="card-title">Tema: Importância de políticas públicas no combate ao racismo</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Aluno</th>
                                                        <th scope="col">Comentário</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">Pontuação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-middle">Osvaldo Andrade</td>
                                                        <td class="align-middle">Ótima argumentação</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">100/100</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle">Carla Drummond</td>
                                                        <td class="align-middle">Erro ortográfico (linha 12). Boa tese</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">90/100</td>
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
                                        <h5 class="card-title">Tema: A democratização do acesso ao teatro</h5>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Aluno</th>
                                                        <th scope="col">Comentário</th>
                                                        <th scope="col"></th>
                                                        <th scope="col" class="text-center">Nota</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-middle">Anita Benfatti</td>
                                                        <td class="align-middle">Perfeita argumentação!</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">100/100</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle">Carla Drummond</td>
                                                        <td class="align-middle">(Sem correção)</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">Pendente</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle">Osvaldo Andrade</td>
                                                        <td class="align-middle">(Sem correção)</td>
                                                        <td class="align-middle"><a href="#" class="btn btn-sm float-right mr-3" style="background-color: #2a659d; color:#fff"><i class="material-icons mt-1">chevron_right</i></a></td>
                                                        <td class="text-center align-middle">Pendente</td>
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
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>