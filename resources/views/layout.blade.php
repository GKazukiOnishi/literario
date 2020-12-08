@extends('base')

@section('adicionais')
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
@endsection