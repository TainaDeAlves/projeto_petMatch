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

            <p class="aviso">Campos com * são obrigatórios</p>

          
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <br>

            <form method="post" action="{{ route('admin.pets.cadastrar.salvar') }}" id="cadastropet" enctype="multipart/form-data">
                @csrf

                <!-- Dados do Doador -->
                <div id="dadosdoador" class="dados">
                    <p class="titulocampoform">Dados do Doador:</p>
                    <div id="primeirasinformacoes" class="espacamento">
                        <label for="nome_doador">Doador: *</label>
                        <input type="text" name="nome_doador" id="nome_doador" value="{{ old('nome_doador', $pet->nome_doador ?? '') }}">
                        
                        <label for="contato_doador">Contato: *</label>
                        <input type="text" name="contato_doador" id="contato_doador" value="{{ old('contato_doador', $pet->contato_doador ?? '') }}">
                    </div>
                    <div id="segundainformacoes" class="espacamento">
                        <label for="estado_doador">Estado: *</label>
                        <input type="text" name="estado_doador" id="estado_doador" value="{{ old('estado_doador', $pet->estado_doador ?? '') }}">

                        <label for="cidade_doador">Cidade: *</label>
                        <input type="text" name="cidade_doador" id="cidade_doador" value="{{ old('cidade_doador', $pet->cidade_doador ?? '') }}">
                    </div>
                </div>

                <!-- Dados do Pet -->
                <div id="dadospetform" class="dados">
                    <p class="titulocampoform">Dados do Pet:</p>
                    <div id="imgpet" class="espacamento">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="inseririmg">
                                <img src="{{ isset($pet->images[$i]) ? asset($pet->images[$i]) : asset('./img/pet_7104394.png') }}" alt="Imagem" id="imagem{{ $i }}" onclick="document.getElementById('inputImagem{{ $i }}').click()">
                                <input type="file" id="inputImagem{{ $i }}" name="images[]" accept="image/*" style="display: none;" data-imagemid="imagem{{ $i }}">
                            </div>
                        @endfor
                    </div>
                    <div id="informacoespetform" class="espacamento">
                        <label for="nome">Nome do Pet: *</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome', $pet->nome ?? '') }}">

                        <label for="especie">Espécie: *</label>
                        <select id="especie" name="especie">
                            <option value="cr" {{ (old('especie', $pet->especie ?? '') == 'cr') ? 'selected' : '' }}>Cachorro</option>
                            <option value="gt" {{ (old('especie', $pet->especie ?? '') == 'gt') ? 'selected' : '' }}>Gato</option>
                        </select>

                        <label for="raca">Raça: *</label>
                        <input type="text" name="raca" id="raca" value="{{ old('raca', $pet->raca ?? '') }}">

                        <label for="sexo">Sexo: *</label>
                        <select id="sexo" name="sexo">
                            <option value="m" {{ (old('sexo', $pet->sexo ?? '') == 'm') ? 'selected' : '' }}>Macho</option>
                            <option value="f" {{ (old('sexo', $pet->sexo ?? '') == 'f') ? 'selected' : '' }}>Fêmea</option>
                        </select>

                        <label for="porte">Porte: *</label>
                        <select id="porte" name="porte">
                            <option value="p" {{ (old('porte', $pet->porte ?? '') == 'p') ? 'selected' : '' }}>Pequeno</option>
                            <option value="m" {{ (old('porte', $pet->porte ?? '') == 'm') ? 'selected' : '' }}>Médio</option>
                            <option value="g" {{ (old('porte', $pet->porte ?? '') == 'g') ? 'selected' : '' }}>Grande</option>
                        </select>

                        <label for="idade">Idade: *</label>
                        <input type="text" name="idade" id="idade" value="{{ old('idade', $pet->idade ?? '') }}">
                    </div>

                    <!-- Destaques -->
                    <div id="destaquepet" class="espacamento">
                        <p class="titulocampoform">Destaque: *</p>                      
                            <label for="destaque{{ $i }}">Destaque 1:</label>
                            <input type="text" name="destaque_um" id="destaque_um" value="{{ old('destaque_um', $pet->destaque_um ?? '') }}">                       
                    </div>
                    <div id="destaquepet" class="espacamento">
                        <p class="titulocampoform">Destaque: *</p>                      
                            <label for="destaque{{ $i }}">Destaque 2:</label>
                            <input type="text" name="destaque_dois" id="destaque_dois" value="{{ old('destaque_dois', $pet->destaque_dois ?? '') }}">                       
                    </div>
                    <div id="destaquepet" class="espacamento">
                        <p class="titulocampoform">Destaque: *</p>                      
                            <label for="destaque{{ $i }}">Destaque 3:</label>
                            <input type="text" name="destaque_tres" id="destaque_tres" value="{{ old('destaque_tres', $pet->destaque_tres ?? '') }}">                       
                    </div>

                    <!-- Descrição -->
                    <div id="descricaopetform" class="espacamento">
                        <p class="titulocampoform">Descrição: *</p>
                        <textarea name="descricao" id="descricao" cols="50" rows="12">{{ old('descricao', $pet->descricao ?? '') }}</textarea>
                    </div>

                    <div class="bloco-foto">
                        <p class="fotos">Foto: *</p>
                        <label for="fotos">Foto:</label>
                        <input type="file" name="fotos[]" id="fotos" multiple>
                     
                    </div>

                    


                </div>

                <!-- Botões -->
                <div class="botaoformcadastrop">
                    <a href="{{ route('admin.pets.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit">{{ isset($pet) ? 'Atualizar' : 'Cadastrar' }}</button>
                </div>
            </form>

        </div>
    </main>

    @include('includes.rodape')
    <script src="{{ asset('./js/cadastropet.js') }}"></script>
</body>

</html>
