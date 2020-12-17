@extends('base')

@section('adicionais')
    <!-- Conteúdo da página -->
    <div class="tab-content" id="v-nav-tabContent">
        <div class="container mt-3">
            <h4 class="bg-light" style="padding: 10px; text-align: center">Exercícios</h4>
            <button type="button" class="btn float-left mr-3" style="background-color: gray; color:#fff">
                <i class="material-icons mt-1" data-toggle="modal" data-target="#AddModal2" data-whatever="DeleteSubsection">delete</i>
            </button>
            <button type="button" onclick="apagarAlternativas();" class="btn float-left mr-3" style="background-color: gray; color:#fff">
              <i class="material-icons mt-1" data-toggle="modal" data-target="#AddModal3" data-whatever="Adicionar">add_box</i>
            </button><br><br> 
            
            <!-- Cards com exes -->

            @foreach ($exercicios as $index=>$exercicio)
                <div class="card m-3">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Exercício {{$index+1}} - Subseção: {{$exercicio['subsecao']}}</label><br/>
                                        @if (isset($exercicio['enunciado1']))
                                            <label>{{$exercicio['enunciado1']}}</label><br/>
                                            <img src="{{asset($exercicio['img'])}}" alt="Imagem {{$exercicio['nomeImg']}}" /><br/>
                                            <label>{{$exercicio['enunciado2']}}</label>
                                        @else
                                            <label>{{$exercicio['enunciado']}}</label>
                                        @endif
                                        @if ($exercicio['tipo'] == 'D')
                                            <textarea class="form-control" id="exampleFormControlTextarea{{$index}}" rows="3" value={{isset($exercicio['resolucao']) ? $exercicio['resolucao']['resposta'] : ""}}></textarea>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($exercicio['tipo'] == 'A')
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <div class="row">
                                            <legend class="col-form-label col-sm-2 pt-0">Alternativas</legend>
                                            <div class="col-sm-10">
                                                @foreach ($exercicio['alternativas'] as $index=>$alternativa)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="resposta" id="resp{{$index}}">
                                                        <label class="form-check-label" for="resp{{$index}}">
                                                            {{$alternativa['texto']}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            @endif
                            <div class="row justify-content-end mt-4">
                                <button type="button" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff"><i data-toggle="modal" data-target="#AddModal1" data-whatever="Salvar">Salvar gabarito</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modais -->

    <!-- Modal mensagem gabarito salvo -->
    <div class="modal fade" id="AddModal1" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AddModalLabel">Salvar gabarito</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <label>Gabarito salvo com êxito!</label>
            </div>
          </div>
        </div>
    </div>

    <!-- Modal deletar -->
    <div class="modal fade" id="AddModal2" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AddModalLabel">Deletar exercício</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <label for="delete-exe-select">Exercício</label>
                        <select class="form-control" id="delete-exe-select">
                            <option>Exercício 1</option>
                            <option>Exercício 2</option>
                            <option>Exercício 3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-secondary float-right">Confirmar</button>
                </form>
              </div>
          </div>
        </div>
    </div>

    <!-- Modal Adicionar -->
    <div class="modal fade" id="AddModal3" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AddModalLabel">Adicionar exercício</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/exercicio/{{$area}}/{{$secao}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="textoEnunciado">Enunciado</label>
                                    <textarea name="enunciado" class="form-control" id="textoEnunciado" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nomeImg" class="form-control" id="inputNomeImg" placeholder="Nome da imagem">
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="img" class="custom-file-input" id="inputGroupFile" aria-describedby="inputGroupFileAddon">
                                        <label class="custom-file-label" for="inputGroupFile">Adicionar imagem</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <fieldset class="form-group">
                                    <div class="row">
                                    <legend class="col-form-label col-sm-4 pt-0">Tipo de exercício</legend>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipo" value="D" id="radioDissertativo" onclick="hide();">
                                        <label class="form-check-label" for="radioDissertativo" id="labelDiss">
                                            Dissertativo
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipo" value="A" id="radioMultipla" onclick="show();" checked>
                                        <label class="form-check-label" for="radioMultipla" id="labelMult">
                                            Múltipla escolha
                                        </label>
                                        </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="subsection-select">Subseção</label>
                                    <select class="form-control" id="subsection-select" name="subsecao">
                                        @foreach ($subsecoes as $subsecao)
                                            <option value="{{$subsecao['id']}}">{{$subsecao['nome']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <label>Alternativas: </label>
                                <button type="button" onclick="adicionarAlternativa();" class="btn mr-3" style="background-color: #2a659d; color:#fff">
                                    <i class="material-icons mt-1">add_box</i>
                                </button>
                                <button type="button" class="btn mr-3" style="background-color: #2a659d; color:#fff">
                                    <i class="material-icons mt-1">reorder</i>
                                </button>
                            </div>
                            <div class="col-12">
                                <div class="form-check" id="alternativas">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-4">
                            <button type="submit" class="btn float-right mr-3" style="background-color: #2a659d; color:#fff">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
    <!-- Fim modal adicionar exe -->
@endsection

<script>
    let contador = 0
    function show(){
        document.getElementById('alternativas').style.display ='flex';
    }
    function hide(){
        document.getElementById('alternativas').style.display ='none';
    }
    function adicionarAlternativa() {
        const div = document.getElementById('alternativas')

        const linha = document.createElement('div')
        linha.classList.add('d-flex')
        linha.classList.add('align-items-center')

        const input = document.createElement('input')
        input.setAttribute('type', 'radio')
        input.setAttribute('id', 'inputAlternativa'+contador)
        input.classList.add('form-check-input')

        const label = document.createElement('label')
        label.classList.add('form-check-label')
        label.setAttribute('for', 'inputAlternativa'+contador)

        const inputNome = document.createElement('input')
        inputNome.setAttribute('type', 'text')
        inputNome.classList.add('form-control')
        inputNome.setAttribute('id', 'inputNomeAlternativa'+contador)
        inputNome.setAttribute('name', 'inputNomeAlternativa'+contador)

        const br = document.createElement('br')

        label.appendChild(inputNome)
        linha.appendChild(input)
        linha.appendChild(label)
        div.appendChild(linha)
        div.appendChild(br)

        contador++
    }
    function apagarAlternativas() {
        const div = document.getElementById('alternativas')
        const copy = [...div.childNodes]
        for(let c of copy) {
            div.removeChild(c)
        }
        contador = 0
    }
</script>
