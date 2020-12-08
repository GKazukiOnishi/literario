<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible">
    <title>{{env('APP_NAME')}}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/'.$css.'.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg nav-light" style="background-color: #2a659d; color:#fff; font-family: 'Oswald', sans-serif ">
        <a class="navbar-brand ml-3" href="/" style="font-family: 'Oswald', sans-serif; color:#fff; font-weight: bolder; font-size: larger;">
            <img src="{{ asset('img/logo2.png') }}" alt="Foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;">
            {{env('APP_NAME')}}
        </a>
        <div class="navbar-brand ml-auto d-lg-none">
            <div class="d-flex flex-row">
                <div class="dropdown mr-3">

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownConfig">
                        <div class="card">

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout2') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
  
                {{-- <a href="/perfil"><img src="{{ asset('img/user1.png') }}" alt="Foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;"></a> --}}
            </div>
        </div>
   

        <div class="collapse navbar-collapse ml-4 ml-lg-auto" id="navbarSupportedContent">
            <div class="ml-auto d-none d-lg-block">
                <div class="d-flex flex-row">
              
                                @guest
                               
                                @if (Route::has('register'))
                                 
                                @endif
                            @else
                                
                                    <a id="navbarDropdown " class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <a href="/perfil"><img src="{{ asset('img/user1.png') }}" alt="Foto de perfil" class="rounded-circle mr-3" style="width: 3rem; height: 3rem;"></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row mx-5 my-4 h-100">
        <!--menu lateral-->
        <div class="w-100 col-lg-2 mb-4 mb-lg-0">
            <div class="card mx-0">
                <div class="card-body">
                    <div class="nav flex-lg-column nav-pills nav-justified " id="v-nav-estatistica-tab" role="tablist" aria-orientation="vertical">
                        @foreach ($menus as $menu)
                            <a class="nav-item nav-link bg-light {{$loop->first?'active':''}}" id="v-nav-{{$menu['id']}}-tab" data-toggle="pill" href="#v-nav-{{$menu['id']}}" role="tab"
                                aria-controls="v-nav-{{$menu['id']}}" aria-selected="{{$loop->first?'true':'false'}}">
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

        <!--conteúdo-->
        <div class="w-100 col-lg-10">
            @yield('conteudo')
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>