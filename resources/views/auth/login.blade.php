<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta lang="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
    <body>'

<div class="container">
 <div class='limiter'>
    <div class='container-login100'>
        <div class='wrap-login100'>
            <div class='login100-pic js-tilt' data-tilt>
                <img src='img/logo.png' alt='Logo'>
            </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <span class='login100-form-title'>
                            Faça seu login
                        </span>

                        <div class='wrap-input100 validate-input' data-validate = 'Usuário é obrigatório (SP+prontuário)'>
                            @error('email')
                                <p class="invalid-feedback" role="alert">
                                    <strong style = "color: brown">{{ $message }}</strong>
                                </p>
                            @enderror
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Usuario" autofocus >
                            

                            <span class='focus-input100'></span>
                            <span class='symbol-input100'>
                                <i class='fa fa-user-circle-o' aria-hidden='true'></i>
                            </span>
                        </div>

                        <div class="form-group row">
                            <div class='wrap-input100 validate-input' data-validate = 'Senha é obrigatória'>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">

                                @error('password')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p> 
                                 @enderror 
                                 
                                <span class='focus-input100'></span>
                                <span class='symbol-input100'>
                                <i class='fa fa-lock' aria-hidden='true'></i>
                    </span>
                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class='container-login100-form-btn'>
                                <button type="submit" class='login100-form-btn'>
                                    {{ __('Entrar') }}
                                </button>
                            </button>
                        </div>
                        <div class='text-center p-t-12'>
                            <span class='txt1'>
                                Esqueceu
                            </span>
                            <a class='txt2' href='#'>
                                Usuário / Senha?
                            </a>
                        </div>
        
                        <div class='text-center p-t-136'>
                            <a class='txt2' href='#'></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
                            </div>
                            <!--===============================================================================================-->	
<script src='vendor/jquery/jquery-3.2.1.min.js'></script>
<!--===============================================================================================-->
<script src='vendor/bootstrap/js/popper.js'></script>
<script src='vendor/bootstrap/js/bootstrap.min.js'></script>
<!--===============================================================================================-->
<script src='vendor/select2/select2.min.js'></script>
<!--===============================================================================================-->
<script src='vendor/tilt/tilt.jquery.min.js'></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src='js/main.js'></script>
                    
    </body>
    </html>
    
