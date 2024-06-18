<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro das ONGS</title>
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

    <link rel="stylesheet" href="css/main.css" />
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
          <a href="login.html">Login</a>
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
      <hr />
      <div class="container-Ongs">
        <div class="bloco-Ong">
          <h1 class="texto-Ong">Cadastro da ONG</h1>
          <p>
            <label for="nomeong" name="nomeong" id="nomeong"></label>
            <input type="text" placeholder="Nome Da ONG" id="nomeong" />
          </p>
          <p>
            <label for="email" name="email" id="emailong"></label>
            <input type="text" placeholder="E-mail Da ONG" id="emailong" />
          </p>
          <p>
            <label for="cnpjong" name="cnpjong" id="cnpjong"></label>
            <input type="text" placeholder="CNPJ Da ONG" id="cnpjong" />
          </p>
          <p>
            <label for="cidadeong" name="cidadeong" id="cidadeong"></label>
            <input type="text" placeholder="Cidade Da ONG" id="cidadeong" />
          </p>
          <p>
            <label
              for="enderecoong"
              name="enderecoong"
              id="enderecoong"
            ></label>
            <input type="text" placeholder="Endereço Da ONG" id="enderecoong" />
          </p>
          <p>
            <select name="estado" id="estadoong" >
              <option value="">Selecine o Estado Que a Sua Ong Reside</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </p>
          <p>
            <label for="senhaong" name="senhaong" id="senhaong"></label>
            <input type="password" placeholder="Senha" id="senhaong" />
          </p>
          <p>
            <label
              for="confirmarsenha "
              name="confirmarsenha"
              id="confirmarsenha"
            ></label>
            <input
              type="password"
              placeholder="Confirmar Sua Senha"
              id="confirmarsenha"
            />

           
          </p>
          <a href="login.html" id="botaoEntrar">Login</a>

        
        </div>
      </div>

      <hr />

      <footer class="rodape">
        <div class="logo">
          <img src="./img/logo3.png" alt="" width="200" />
          <a href="#" class="texto"
            >A plataforma que <br />
            une corações e patinhas.</a
          >
          <a href="#"
            ><img src="./img/facebook.png" alt="facebok" class="imgf"
          /></a>
          <a href="#"><img src="./img/instagram.png" alt="instagram" /></a>
          <a href="#"><img src="./img/twiter.png" alt="twiter" /></a>
          <a href="#"><img src="./img/linkedin.png" alt="linkedin" /></a>
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
