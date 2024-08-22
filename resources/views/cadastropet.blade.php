@extends('layout.home')

<body>
    <header id="cabecalho" class="container paginainterna">
        @include("includes.barratopo")
    </header>
    <main id="fundolinear">
        <div class="container">

            <div class="titulocadastropet">
                <h2><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> Cadastar pet
                    <i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i>
                </h2>
            </div>

            <p class="aviso">Campos com * são obrigatorios</p>

            <form method="post" action="#" id="cadastropet">
                    @csrf
                <div id="dadosdoador" class="dados">

                    <p class="titulocampoform">Dados do doador:</p>


                    <div id="primeirasinformacoes" class="espacamento">

                        <label for="doadorpet">Doador : *
                            <input type="text" name="doadorpet" id="doadorpet">
                        </label>
                        <label for="Contatopet">Contato : *
                            <input type="text" name="contatopet" id="contatopet">
                        </label>
                    </div>

                    <div id="segundainformacoes" class="espacamento">

                        <label for="estadopet">Estado : *
                            <input type="text" name="estadopet" id="estadopet">
                        </label>
                        <label for="cidadepet"><span>Cidade : *</span>
                            <input type="text" name="cidadepet" id="cidadepet">
                        </label>
                    </div>

                </div>

                <div id="dadospetform" class="dados">

                    <p class="titulocampoform">Dados pet:</p>
                    <div id="imgpet" class="espacamento">


                        <div class="inseririmg">

                            <img src="{{asset('./img/pet_7104394.png')}}" alt="Imagem" id="imagem"
                                onclick="document.getElementById('inputImagem').click()">
                            <input type="file" id="inputImagem" accept="image/*" style="display: none;"
                                data-imagemid="imagem">
                        </div>
                        <div class="inseririmg">

                            <img src="{{asset('./img/pet_7104394.png')}}" alt="Imagem" id="imagem1"
                                onclick="document.getElementById('inputImagem1').click()">
                            <input type="file" id="inputImagem1" accept="image/*" style="display: none;"
                                data-imagemid="imagem1">
                        </div>

                        <div class="inseririmg">

                            <img src="{{asset('./img/pet_7104394.png')}}" alt="Imagem" id="imagem2"
                                onclick="document.getElementById('inputImagem2').click()">
                            <input type="file" id="inputImagem2" accept="image/*" style="display: none;"
                                data-imagemid="imagem2">
                        </div>

                    </div>
                    <div id="informacoespetform" class="espacamento">

                        <p>
                            <label for="nomepet">Nome:</label>
                            <input type="text" name="nomepet" id="namepet">
                        </p>
                        <p>
                            <label for="especieform">Especie:</label>

                            <select id="especieform" name="especieform">
                                <option value="cr">Cachorro</option>
                                <option value="gt">Gato</option>
                            </select>
                        </p>
                        <p>
                            <label for="sexoform">Sexo:</label>

                            <select id="sexoform" name="sexoform">
                                <option value="m">Macho</option>
                                <option value="f">Femia</option>
                            </select>
                        </p>
                        <p>
                            <label for="porte">Porte:</label>

                            <select id="porte" name="porte">
                                <option value="p">Pequeno</option>
                                <option value="m">Medío</option>
                                <option value="g">Grande</option>
                            </select>
                        </p>
                        <p>
                            <label for="idade">Idade:</label>
                            <input type="text" name="idade" id="idade">
                        </p>

                    </div>

                    <div id="destaquepet" class="espacamento">
                        <p class="titulocampoform">Destaque : *</p>

                        <label for="destaque1"><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i></label>
                        <input type="text" name="destaque1" id="destaque1">

                        <label for="destaque2"><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i></label>
                        <input type="text" name="destaque2" id="destaque2">

                        <label for="destaque3"><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i></label>
                        <input type="text" name="destaque3" id="destaque3">

                    </div>

                    <div id="descricaopetform" class="espacamento">
                        <p class="titulocampoform">
                            Descrição : *
                        </p>
                        <label for="descricaoform"></label>
                        <textarea name="descricaoform" id="descricaoform" cols="50" rows="12"></textarea>

                    </div>

                </div>

                <div class="botaoformcadastro">

                    <a href="{{route('index')}}">Cancelar</a>
                    <button name="cadastrarpet">Cadastrar</button>
                </div>


            </form>
        </div>

    </main>

@include("includes.rodape")
    <script src="{{asset('./js/cadastropet.js')}}"></script>
</body>

</html>
