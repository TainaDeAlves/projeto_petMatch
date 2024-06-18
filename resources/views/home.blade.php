@extends('layout.home')


@section('conteudo')
<header id="cabecalho" class="container imagemBanner">
  @include('includes.barratopo')

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
  <div class="container">
    <div class="estastistica">
      <div class="numero">
        <p class="valor">232</p>
        <p>Pets Adotados</p>
      </div>

      <div class="numero">
        <p class="valor">206</p>
        <p>Clientes</p>
      </div>

      <div class="numero">
        <p class="valor">3</p>
        <p>Anos</p>
      </div>

      <div class="icone-pata">
        <img src="/img/Patinhas.png" alt="" />
      </div>
    </div>
  </div>

  <section class="container">
    <h2 class="titulo">Adote um pet em apenas <span> 3 passos </span></h2>
    <div class="passosadote">
      <div class="blocochamada">
        <img src="./img/marcador.png" alt="icone-marcador" />
        <p class="cor">Encontre seu companheiro</p>
        <p class="espaçamento1">
          Encontre o companheiro perfeito para você navegando por fotos e
          perfis
        </p>
      </div>

      <div class="blocochamada bloco-meio">
        <img src="./img/formulario.png" alt="icone-formulario" />
        <p class="cor2">Preencha nosso formulário de adoção</p>
        <p class="espaçamento2">
          Preencha nosso formulário de adoção online e compartilhe
          informações sobre você e seu lar
        </p>
      </div>

      <div class="blocochamada">
        <img src="./img/coracao.png" alt="icone-coracao" />
        <p class="cor3">Conheça e adote</p>
        <p class="espaçamento3">
          Agende uma visita, conheça seu novo amigo e inicie uma jornada
          repleta deamor ao levá-lo para casa
        </p>
      </div>
    </div>
  </section>

  <section class="container">
    <h3>Descubra nossos adoráveis <span> pets por categorias </span></h3>
    <div id="selecaoDeCachorros">
      <div>
        <p>
          Conheça nossa seleção de cachorros, gatos e outros animais em
          busca de um lar amoroso.
        </p>
      </div>
    </div>
  </section>

  <section class="container bloco-pet">
    
    <div class="bloco">
      <img src="./img/cachorro-icone.png" alt="" >
      <h2 class="caramelo">CACHORROS</h2>
    </div>
    <div class="bloco">
      <img src="./img/gato-icone.png" alt="" >
      <h2 class="caramelo">GATOS</h2>
    </div>
    <div class="bloco">
      <img src="./img/outrospets.png" alt="" >
      <h2 class="caramelo">OUTROS PETS</h2>
    </div>
  </section>

  <section class="container4">
    <div class="bloco-depoimentos">
      <h1 class="depoimento">Depoimentos dos adotantes</h1>
      <p class="depoimento1">
        Leia os depoimentos dos nossos adotantes e veja como encontraram
        novos lares para nossos pets.
      </p>
    

    <div class="depoimentos2">
      <img src="./img/depoimentos2.png" alt="" class="testimony1" />

      <img src="./img/depoimentos1.png" alt="" class="testimony2" />
      <img src="./img/depoimentos3.png" alt="" class="testimony3" />
    </div>
  </section>

  <section class="se-inscreva">
    <div class="imagem">
      <img src="./img/imagem-dog.png" alt="" width="750" />
      <h1 class="boletin">
        Inscreva-se na nossa <br /><span class="roxo">newsletter </span>
      </h1>
      <p class="ultimas">
        Receba as últimas novidades sobre adoção, <br />
        dicas de cuidados e histórias inspiradoras de <br />
        resgate diretamente na sua caixa de entrada. <br />
        Inscreva-se agora!
      </p>
    </div>

    <div class="formulario">
      <!-- <form action="#" class="caixa-mensagem"></form> -->
      <input type="text" placeholder="Seu-E-mail" class="pesquisa" />
     <div>
      <a href="cadastre-se.html" class="botao">Inscreva-se</a>
    </div>
    </div>
  </section>

  @include("includes.rodape")

  
</main>

@endsection
