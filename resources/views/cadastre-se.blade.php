{{-- <!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PetMatch</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/main.css" /> --}}
    @extends('layout.home')
  </head>
  
  <body>
    <header id="cabecalho" class="container imagemBanner">
      <div class="barratopo">
        <div id="logo">
          <img src="./img/logo3.png" alt="" width="150" />
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
            <input type="text" class="caixa-text" />
            <button type="submit" class="lupa">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </div>

        <div id="botao">
          <a href="cadastre-se.html">Cadastre-se</a>
        </div>
      </div>

      <div id="banner">
        <img src="img/Formato cabeçalho.png" alt="" />
        <div class="mensagem-banner">
          <h1>ADOTE, AME E SEJA AMADO</h1>
          <p>Descubra a felicidade em quatro patas!</p>
          <p>
            Escolha seu novo amigo e preencha sua vida com amor e lealdade
            incondicionais.
          </p>

          <a href="adote-um-amigo.html" class="botao-adotar"> Adotar agora </a>
        </div>
      </div>
    </header>
    <main>
      <div class="cadastre-se">
        <div class="cadastro">
          <h1 class="texto1">Cadastre-se Aqui</h1>
          <input type="text" placeholder="Nome" class="name" />
          <input type="text" placeholder="E-mail" class="email" />
          <input type="text" placeholder="Cidade" class="city" />
          <input type="text" placeholder="Estado" class="uf" />
          <input type="password" placeholder="Senha" class="sen" />
          <input
            type="password"
            placeholder="Confirme sua senha"
            class="Confirme"
          />
        </div>

        <div>
          <a href="login.html" class="gin">Login</a>
        
        
          <a href="cadastro-ongs.html" class="ONGS">Cadastro das ONGS</a>
        </div>
      </div>

      <footer class="rodape">
        <div class="logo">
          <img src="./img/logo3.png" alt="" width="200" />
          <a href="#" class="texto"
            >A plataforma que <br />
            une corações e patinhas.</a
          >
          <img src="./img/facebook.png" alt="facebok" class="imgf" />
          <img src="./img/instagram.png" alt="instagram" />
          <img src="./img/twiter.png" alt="twiter" />
          <img src="./img/linkedin.png" alt="linkedin" />
        </div>
        <div class="categorias">
          <h1>Categorias</h1>
          <a href="adote-um-amigo.html">Adote</a>
          <a href="contribucao.html">Contribua</a>
          <!-- <a href="#">Blog</a> -->
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
          <img src="./img/playstore.png" alt="playstore" />
          <img src="./img/appstore.png" alt="appstore" />
        </div>
      </footer>
    </main>

    <script src="./js/main.js"></script>
  </body>
</html>
