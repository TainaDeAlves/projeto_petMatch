@extends('layout.home')


<body>
    <header id="cabecalho" class="container imagemBanner">
        @include('includes.barratopo')
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

        @if (session('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
        @endif
       
        <form action="{{ route('admin.usuarios.cadastrar') }}" method="post">
            @csrf
            <div class="cadastre-se">

                <div class="cadastro">
                    <h1 class="texto1">Cadastre-se Aqui</h1>
                    <label for="nome"></label>
                    <input type="text" id="nome" name="nome" placeholder="Nome" class="name" />

                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="E-mail" class="email" />

                    <label for="cidade"></label>
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade" class="city" />

                    <label for="estado"></label>
                    <input type="text" id="estado" name="estado" placeholder="Estado" class="uf" />

                    <label for="password"></label>
                    <input type="password" id="passoword" name="password" placeholder="Senha" class="sen" />

                    <lable for="password_confirmation"></lable>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" class="Confirme" />
                </div>

                <div>
                    <a href="{{ route('cadastrosalvo') }}" class="gin">Salvar</a>


                    <a href="cadastro-ongs.html" class="ONGS">Cadastro das ONGS</a>
                </div>
            </div>
        </form>
    </main>
    @include('includes.rodape')
    <script src="{{ asset('./js/main.js') }}"></script>
