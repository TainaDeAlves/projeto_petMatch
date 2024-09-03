@extends('layout.home')

<body>
    <header id="cabecalho" class="container paginainterna">
        @include('includes.barratopo')
    </header>
    <main id="fundolinear">
        <div class="container">

            <div class="titulocadastropet">
                <h2><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> Cadastar pet
                    <i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i>
                </h2>
            </div>

            <p class="aviso">Campos com * são obrigatorios</p>

            <form method="post" action="{{ isset($pet) ? route('pet.update', $pet->id) : route('pet.store') }}" id="cadastropet" enctype="multipart/form-data">
                @csrf
                @if(isset($pet))
                    @method('PUT')
                @endif
            
                <div id="dadosdoador" class="dados">
                    <p class="titulocampoform">Dados do doador:</p>
                    <div id="primeirasinformacoes" class="espacamento">
                        <label for="doadorpet">Doador : *
                            <input type="text" name="doadorpet" id="doadorpet" value="{{ old('doadorpet', $pet->doadorpet ?? '') }}">
                        </label>
                        <label for="contatopet">Contato : *
                            <input type="text" name="contatopet" id="contatopet" value="{{ old('contatopet', $pet->contatopet ?? '') }}">
                        </label>
                    </div>
                    <div id="segundainformacoes" class="espacamento">
                        <label for="estadopet">Estado : *
                            <input type="text" name="estadopet" id="estadopet" value="{{ old('estadopet', $pet->estadopet ?? '') }}">
                        </label>
                        <label for="cidadepet"><span>Cidade : *</span>
                            <input type="text" name="cidadepet" id="cidadepet" value="{{ old('cidadepet', $pet->cidadepet ?? '') }}">
                        </label>
                    </div>
                </div>
            
                <div id="dadospetform" class="dados">
                    <p class="titulocampoform">Dados pet:</p>
                    <div id="imgpet" class="espacamento">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="inseririmg">
                                <img src="{{ isset($pet->images[$i]) ? asset($pet->images[$i]) : asset('./img/pet_7104394.png') }}" alt="Imagem" id="imagem{{ $i }}" onclick="document.getElementById('inputImagem{{ $i }}').click()">
                                <input type="file" id="inputImagem{{ $i }}" name="images[]" accept="image/*" style="display: none;" data-imagemid="imagem{{ $i }}">
                            </div>
                        @endfor
                    </div>
                    <div id="informacoespetform" class="espacamento">
                        <p>
                            <label for="nomepet">Nome:</label>
                            <input type="text" name="nomepet" id="namepet" value="{{ old('nomepet', $pet->nomepet ?? '') }}">
                        </p>
                        <p>
                            <label for="especieform">Espécie:</label>
                            <select id="especieform" name="especieform">
                                <option value="cr" {{ (old('especieform', $pet->especieform ?? '') == 'cr') ? 'selected' : '' }}>Cachorro</option>
                                <option value="gt" {{ (old('especieform', $pet->especieform ?? '') == 'gt') ? 'selected' : '' }}>Gato</option>
                            </select>
                        </p>
                        <p>
                            <label for="raca">Raça:</label>
                            <input type="text" name="raca" id="raca" value="{{ old('raca', $pet->raca ?? '') }}">
                        </p>
                        <p>
                            <label for="sexoform">Sexo:</label>
                            <select id="sexoform" name="sexoform">
                                <option value="m" {{ (old('sexoform', $pet->sexoform ?? '') == 'm') ? 'selected' : '' }}>Macho</option>
                                <option value="f" {{ (old('sexoform', $pet->sexoform ?? '') == 'f') ? 'selected' : '' }}>Fêmea</option>
                            </select>
                        </p>
                        <p>
                            <label for="porte">Porte:</label>
                            <select id="porte" name="porte">
                                <option value="p" {{ (old('porte', $pet->porte ?? '') == 'p') ? 'selected' : '' }}>Pequeno</option>
                                <option value="m" {{ (old('porte', $pet->porte ?? '') == 'm') ? 'selected' : '' }}>Médio</option>
                                <option value="g" {{ (old('porte', $pet->porte ?? '') == 'g') ? 'selected' : '' }}>Grande</option>
                            </select>
                        </p>
                        <p>
                            <label for="idade">Idade:</label>
                            <input type="text" name="idade" id="idade" value="{{ old('idade', $pet->idade ?? '') }}">
                        </p>
                    </div>
                    <div id="destaquepet" class="espacamento">
                        <p class="titulocampoform">Destaque : *</p>
                        @for ($i = 1; $i <= 3; $i++)
                            <label for="destaque{{ $i }}"><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i></label>
                            <input type="text" name="destaque{{ $i }}" id="destaque{{ $i }}" value="{{ old('destaque'.$i, $pet->{'destaque'.$i} ?? '') }}">
                        @endfor
                    </div>
                    <div id="descricaopetform" class="espacamento">
                        <p class="titulocampoform">Descrição : *</p>
                        <label for="descricaoform"></label>
                        <textarea name="descricaoform" id="descricaoform" cols="50" rows="12">{{ old('descricaoform', $pet->descricaoform ?? '') }}</textarea>
                    </div>
                </div>
            
                <div class="botaoformcadastrop">
                    <a href="{{ isset($pet) ? '/admin/index' : '/' }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" name="cadastrarpet">{{ isset($pet) ? 'Atualizar' : 'Cadastrar' }}</button>
                </div>
            </form>
            
        </div>

    </main>

    @include('includes.rodape')
    <script src="{{ asset('./js/cadastropet.js') }}"></script>
</body>

</html>
