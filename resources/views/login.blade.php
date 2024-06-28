@extends('layout.home')

<body>
    <header id="cabecalho" class="container imagemBanner">
        @include('includes.barratopo')

        <div id="banner">
    
            <div class="mensagem-banner">
                <h1>ADOTE, AME E SEJA AMADO</h1>
                <p>Descubra a felicidade em quatro patas!</p>
                <p>Escolha seu novo amigo e preencha sua vida com amor e lealdade incondicionais.</p>

                <a href="#" class="botao-adotar">
                    Adotar agora
                </a>
            </div>

        </div>

    </header>
    <main>

        <div class="cadastre-se1">
            <div class="cadastro">
                <h1 class="texto1">Login</h1>
                <input type="text" placeholder="Nome" class="name">
                <input type="text" placeholder="E-mail" class="email">
                <input type="password" placeholder="Senha" class="sen">
                
                

            </div>
            <a href="index.html" class="gin">Entrar</a>
        </div>


@include('includes.rodape')
    </main>

    <script src="{{asset('./js/main.js"')}}></script>
