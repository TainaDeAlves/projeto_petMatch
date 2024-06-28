
    @extends('layout.home')

  
  <body>
    <header id="cabecalho" class="container imagemBanner">
         @include("includes.barratopo")    
      <div id="banner">
        
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
    </main>
@include('includes.rodape')
    <script src="{{asset("./js/main.js")}}"></script>

