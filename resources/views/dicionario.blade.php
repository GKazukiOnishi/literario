@extends('base')

@section('adicionais')
    
    <div class="d-flex justify-content-center mt-5">
        <form class="col-8 d-flex" action="/dicionario" method="POST">
            @csrf
            <input class="form-control me-2" name="palavra" type="search" placeholder="Buscar" aria-label="Buscar" {{isset($valor) ? 'value=palavra' : ''}}>
            <button class="btn" type="submit" style="background-color: #2a659d; color:#fff"><i
                class="material-icons mt-1">search</i></button>
        </form>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="card col-10">
            <h5 class="card-header">Etimologia</h5>
            <div class="card-body">
                <p class="card-text">{{$response->etymology}}</p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center my-5">
        <div class="card col-10">
            <h5 class="card-header">Significados</h5>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($response->meanings as $significado)
                        <li class="list-group-item">{{$significado}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection