@extends('layout.home')




<header id="cabecalho" class="container paginainterna">
    @include('includes.barratopo')



</header>
<main class="container" id="containeradotar">

    @include('includes.nav_admin')

    <section id="visualizarpet">
        <div class="titulovisualizar">
            <h1>Visualização Usuário</h1>
        </div>

        <section id="informacoespet">
            

            <ul class="listadedados">

                <div class="dadosuser">
                    <li><strong>ID:</strong> {{$user->id}}</li>
                    <li><strong>Nome:</strong> {{$user->nome}}</li>
                    <li><strong>email:</strong>{{$user->email}}</li>
                    <li><strong>Cidade:</strong>{{$user->cidade}}</li>
                    <li><strong>Estado:</strong>{{$user->estado}}</li>
                    
                </div>
            </ul>
            <div class="destaquepet">

          

            </div>
        </section>

        <div class="botoes">
            <div class="btncrud">

                <div class="btne"><a href="{{route('admin.usuarios.editar',['id' => $user->id])}}">Editar</a></div>

                <div class="btnv"><a href="{{route('admin.usuarios.index')}}">Cancelar</a></div>
            </div>

        </div>

    </section>
</main>


@include('includes.rodape')
<script src="{{ asset('./js/main.js') }}"></script>
