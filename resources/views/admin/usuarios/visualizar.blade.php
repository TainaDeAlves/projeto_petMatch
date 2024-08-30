@extends('layout.home')




<header id="cabecalho" class="container paginainterna">
    @include('includes.barratopo')



</header>
<main class="container" id="containeradotar">

    @include('includes.nav_admin')

    <section id="visualizarpet">
        <div class="titulovisualizar">
            <h1>Visualização <i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i></h1>
        </div>

        <section id="informacoespet">
            <div class="fotoscadastradas">
                <h2>Fotos:</h2>
                <div class="img" id="inseririmg">

                    <img src="{{ asset('./img/Homem 1.png') }}" alt="fotopet" style="filter: blur(0px);
    transition: filter 0.1ms ease-in-out;" class="img1">
                    <img src="{{ asset('./img/Homem 1.png') }}" alt="fotopet" style="filter: blur(0px);
    transition: filter 0.1ms ease-in-out;" class="img2">
                    <img src="{{ asset('./img/Homem 1.png') }}" alt="fotopet" style="filter: blur(0px);
    transition: filter 0.1ms ease-in-out;" class="img3">

                </div>
            </div>

            <ul class="listadedados">

                <div class="dadosuser">
                    <li><strong>Nome:</strong> Mario</li>
                    <li><strong>email:</strong> mario@gmail.com</li>
                    <li><strong>Genero:</strong> Masculino</li>
                    <li><strong>Localização:</strong> Marilia-SP</li>
                    <li><strong>Estado:</strong> São Paulo</li>
                    <li><strong>Senha:</strong> ****************</li>
                </div>

                <div class="sobreopet">
                    <h2><strong>Destaque:</strong></h2>

                    <div class="destaquepet">

                        <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>Casado</strong></p>
                        <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>2 Filhos</strong>
                        </p>
                        <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>Gosto De Cachorros e Gatos</strong> </p>

                    </div>
                </div>


            </ul>
<section class="sobreopet">
            <div class="descricaopetperfil">
                <p class="nomepetperfil"><span> Sobre o Mario</span> </p>

                <p class="historia"> Olá! Meu nome é Mário e estou em busca de um novo amigo de quatro patas para compartilhar minha vida. Sou um homem de 32 anos, apaixonado por animais e com um grande amor pelos cães e gatos.
                </p>

            </div>
</section>
        </section>

        <div class="botoes">
            <div class="btncrud">

                <div class="btne"><a href="{{route('admin.usuarios.editar')}}">Editar</a></div>

                <div class="btnv"><a href="{{route("admin.usuarios.index")}}">Cancelar</a></div>

            </div>

        </div>

    </section>
</main>


@include('includes.rodape')
<script src="{{ asset('./js/main.js') }}"></script>
