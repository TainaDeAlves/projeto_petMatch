@extends('layout.home')




<header id="cabecalho" class="container paginainterna">
    @include('includes.barratopo')



</header>
<main class="container" id="containeradotar">

    @include('includes.nav_admin')

    <section class="naveconteudo">



        <div class="listadoconteudo">


            <div class="conteudo">


                @foreach ($pets as $pet)
                    
                
                <div class="informacoes">
                    <div class="borda">
                        <div class="dadosconteudo">
                            <div class="imgdocard">
                               
                                <img src="{{ asset('storage/'.$pet->fotos[0]->imagem) }}" alt="">
                            </div>

                            <div class="dadosprincipais">
                                <p>ID:{{$pet->id}}</p>
                                <p>Nome:{{$pet->nome}}</p>
                                <p>Sexo: {{$pet->sexo}}</p>
                                <p>Descrição:{{$pet->descricao}}</p>
                            </div>
                        </div>
                        <div class="botoescrud">
                            <div class="botaocrudv"> <a href="{{route('admin.pets.visualizar', ['id'=>$pet->id]) }}">Visualizar</a>
                            </div>

                            <div class="botaocrude"><a href="{{route('admin.pets.cadastrar',  ['id'=>$pet->id])}}">Editar</a></div>

                            <div class="botaocrudex"><button name="" type="submit">Excluir</button></div>

                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </section>

</main>


@include('includes.rodape')
<script src="{{ asset('./js/main.js') }}"></script>
