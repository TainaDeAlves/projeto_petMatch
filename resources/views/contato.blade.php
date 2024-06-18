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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

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
                <a href="cadastre-se.html">Cadastre-se</a>
                <a href="login.html">Login</a>
            </div>

        </div>



    </header>
    <main>
        <div class="container">
            <div class="textsugerirfaq">
                <div class="textfaq">
                    <h2>Perguntas frequentes?</h2>
                    <p>Você também pode acessar<br> nossa página do <span>Faq</span></p>
                </div>
                
                <div class="botaofaq">
                    <a href="faq.html"> FAQ</a>
                </div>
            </div>


            <div class="ii">
                <div class="imgcontato" ></div>
                <div class="textdobackground">
                    <p>A todos <br>os ouvidos !</p>
                </div>
            </div>
        </div>

        <setion class="contatoAtraves">
            <div class="container" id="meiosDeContato">
                <div class="iconecontato">
                    <a href="http://wa.me/551499999999?text=Olá, Tudo Bem, como podemos te ajudar ?"><i class="fa-brands fa-whatsapp fa-2xl" style="color: #ffffff;"></i></a>
                </div>

                <p>Você pode entrar em contato conosco através do:</p>
                <div class="iconecontato">
                    <a href="mailto:contato@petmatch.com"><i class="fa-regular fa-envelope fa-2xl" style="color: #ffffff;"></i></a>
                </div>
            </div>

        </setion>

        <section class="formcontato">
            <div class="container">
                <div class="textformcontato">
                    <h2>Entre em cantato também conosco<br>através do site</h2>
                </div>

                <form method="post" action="#">
                    <div class="formMensagem">

                        <input type="text" id="nome" name="nome" placeholder="Nome:">

                        <input type="email" id="email" name="email" placeholder="E-mail:">

                        <input type="text" id="mensagem" name="mensagem" placeholder="Mesagem:">
                    </div>

                    <div class="botaoenviarform">
                        <input type="submit" id="enviar" name="enviar">
                    </div>
                </form>
            </div>
        </section>



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
            <a href="adote-um-amigo.html">Adote</a>
            <a href="contribucao.html">Contribua</a>


        </div>

        <div class="pet-match">
            <h2>PetMatch</h2>
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
    <script src="./js/main.js"></script>
</body>

</html>