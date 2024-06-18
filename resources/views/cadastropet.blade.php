<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetMatch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">

</head>

<body>
    <header id="cabecalho" class="container paginainterna">
        <div class="barratopo">
            <div id="logo">
                <img src="./img/logo3.png" alt="" width="150">
            </div>

            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.html">Página Inicial</a>
                    </li>

                    <li>
                        <a href="adote-um-amigo.html">Adote</a>
                    </li>

                    <li>
                        <a href="contribucao.html">Contribua</a>
                    </li>

                    <!-- <li>
                        <a href="#">Blog</a>
                    </li> -->

                </ul>
            </nav>
            <div id="FormPesquisa">
                <form>

                    <input type="text" class="caixa-text">
                    <button type="submit" class="lupa"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

            </div>

            <div id="botao">
                <a href="login.html">Login</a>
            </div>

        </div>



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
                            
                            <img src="./img/pet_7104394.png"alt="Imagem" id="imagem"
                                onclick="document.getElementById('inputImagem').click()">
                            <input type="file" id="inputImagem" accept="image/*" style="display: none;"
                                data-imagemid="imagem">
                        </div>
                        <div class="inseririmg">
                            
                            <img src="./img/pet_7104394.png"alt="Imagem" id="imagem1"
                                onclick="document.getElementById('inputImagem1').click()">
                            <input type="file" id="inputImagem1" accept="image/*" style="display: none;"
                                data-imagemid="imagem1">
                        </div>

                        <div class="inseririmg">
                            
                            <img src="./img/pet_7104394.png"alt="Imagem" id="imagem2"
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
                            <label for="porte">Porte:</label>
                            <input type="text" name="porte" id="porte">
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
                    <button name="cadastrarpet">Cadastrar</button>
                </div>


            </form>
        </div>

    </main>



    <footer class="rodape">
        <div class="logo">
            <img src="./img/logo3.png" alt="" width="200">
            <a href="#" class="texto">A plataforma que <br> une corações e patinhas.</a>
            <img src="./img/facebook.png" alt="facebok" class="imgf">
            <img src="./img/instagram.png" alt="instagram">
            <img src="./img/twiter.png" alt="twiter">
            <img src="./img/linkedin.png" alt="linkedin">
        </div>
        <div class="categorias">
            <h1>Categorias</h1>
            <a href=""></a>
            <a href="adote-um-amigo.html">Adote</a>
            <a href="contribucao.html">Contribua</a>
            <!-- <a href="#">Blog</a> -->

        </div>

        <div class="pet-match">
            <h2>PetMatch</h2>
            <a href="index.html">Página Inicial</a>
            <a href="sobre-nos.html">Sobre nós</a>
            <a href="contato.html">Contato</a>
            <a href="faq.html">FAQ</a>
            <a href="politica.html">Política de Privacidade</a>

        </div>

        <div class="Contatos">
            <h3>Contatos</h3>
            <a href="#">Endereço, 00</a>
            <a href="#">(14) 99999-9999</a>
            <a href="#">contato@petmatch.com</a>

        </div>

        <div class="baixe-apps">
            <h4>Baixe o nosso app</h4>
            <img src="./img/playstore.png" alt="playstore">
            <img src="./img/appstore.png" alt="appstore">

        </div>

    </footer>

    <script src="./js/cadastropet.js"></script>
</body>

</html>
