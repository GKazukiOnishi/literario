<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script>
        function showDissertativa1(){
            if(document.getElementById('respostaDissertativa1').style.display == 'none')
                document.getElementById('respostaDissertativa1').style.display ='flex';
            else
                document.getElementById('respostaDissertativa1').style.display ='none';
        }

        function showDissertativa2(){
            if(document.getElementById('respostaDissertativa2').style.display == 'none')
                document.getElementById('respostaDissertativa2').style.display ='flex';
            else
            document.getElementById('respostaDissertativa2').style.display ='none';
        }

        function showMultipla(){
            if(document.getElementById('resp1').checked){
                document.getElementById('respostaMultipla').style.display ='flex';
                document.getElementById('respostaMultiplaCorreta').style.display ='flex';
                document.getElementById('respostaMultiplaErrada').style.display ='none';
            }
            else{
                document.getElementById('respostaMultipla').style.display ='flex';
                document.getElementById('respostaMultiplaCorreta').style.display ='none';
                document.getElementById('respostaMultiplaErrada').style.display ='block';
            }
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
                                    <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff" onclick="showMultipla();">Responder</button>
                                </div>
                                
                                <!-- div da resposta -->
                                <div class="row mt-4" id="respostaMultipla" style="display: none;">
                                    <div class="col-12">
                                        <div class="row mb-2">Resposta:</div>
                                        <!-- div caso resposta correta -->
                                        <div class="conteiner col-12 rounded border mt-3 mb-3" id="respostaMultiplaCorreta" style="background-color:#dff0d8;display: none;">Resposta correta! Parabéns!</div>
                                        <!-- div caso resposta errada -->
                                        <div class="conteiner col-12 rounded border mt-3 mb-3" id="respostaMultiplaErrada" style="background-color:#f2dede;display: none;">
                                            <p class="mt-2">Resposta errada :(</p>
                                            <p>O esperado seria: Obter o precioso conhecimento na área das aplicações Web </p>
                                        </div>
                                    </div>
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
                                    <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff" onclick="showDissertativa1();">Salvar resposta e ver gabarito</button>
                                </div>

                                <!-- div da resposta -->
                                <div class="row mt-4" id="respostaDissertativa1" style="display: none;">
                                    <div class="col-12">
                                        <div class="row mb-2">Resposta:</div>
                                        <div class="conteiner col-12 rounded border mt-3 mb-3" style="background-color:#d9edf7;">O conhecimento acerca das especificidades no campo do desenvolvimento web são imprescindíveis para profissionais da área de TI. Portanto, espera-se que o aluno, em sua resposta, demonstre o profundo contentamento ao desenvolver projetos para a disciplina de AW2.</div>
                                    </div>
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
                                    <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff" onclick="showDissertativa2();">Salvar resposta e ver gabarito</button>
                                </div>

                                <!-- div da resposta -->
                                <div class="row mt-4" id="respostaDissertativa2" style="display: none;">
                                    <div class="col-12">
                                        <div class="row mb-2">Resposta:</div>
                                        <div class="conteiner col-12 rounded border mt-3 mb-3" style="background-color:#d9edf7;">A primeira característica evidenciada na imagem é a expressão de medo, angústia e desespero passada. Levando em conta as inúmeras emoções proporcionadas pelo Instituto Federal, evidencia-se, portanto, que medo, angústia e desespero são algumas delas.</div>
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

</html>