@extends('layout.home')

@section('conteudo')
    <header id="cabecalho" class="container paginainterna">
        @include('includes.barratopo')



    </header>

    <body>
        <main class="container" id="containeradotar">



            @yield('conteudo')

        </main>
        @include('includes.rodape')
    </body>
@endsection
