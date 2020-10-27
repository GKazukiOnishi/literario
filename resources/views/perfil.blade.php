<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible">
    <title>{{env('APP_NAME')}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perfil.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
</head>

<body>
    <nav class="navbar navbar-light bg-white">
    <span class="navbar-brand mb-0 h2" style="font-family: 'Oswald', sans-serif; color: #2a659d;">Edite seu perfil</span>
    <a href="/conteudo"><img src="{{ asset('img/logo.png') }}" width="50" height="50" alt="logo"></a> 
    </nav>
    <br><br><br>

    <div class="perfil container text-center" >
    <br>
        <div class="box">
            <br><br><br><br>
            <img src="img/user.png" width="100" height="100" class="rounded mx-auto d-block" alt="user" style="display: block;">
            <p style="color: #000">{{$prontuario}}</p>
            <br>
            <br>
            <form action="perfil" method="POST">
                @csrf
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" value="{{$nome}}">
                </div>
                </div>
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" value="{{$email}}">
                </div>
                </div>
                <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="senha" value="{{$senha}}">
                </div>
                </div>
                <div class="form-group row">
                    <label for="inputBio3" class="col-sm-2 col-form-label">Bio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="bio" value="{{$bio}}">
                </div>
                </div>
                <button class="btn btn-white" type="submit">Salvar</button>
            </form>
        </div>
    </div>
    <br>

</body>
</html>