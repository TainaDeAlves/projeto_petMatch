@extends('layout.home')




<header id="cabecalho" class="container paginainterna">
    @include('includes.barratopo')



</header>
<main class="container" id="containeradotar">

    @include('includes.nav_admin')

    <section class="naveconteudo">



        <div class="listadoconteudo">


            <div class="conteudo">
                <div class="informacoes">
                    <div class="borda">
                        <div class="dadosconteudo">
                            <div class="imgdocard">
                                <img src="{{ asset('../img/73997.jpg') }}" height="120">
                            </div>

                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Bob</p>
                                <p>Sexo: Macho</p>
                                <p>Descrição: É um cachorro muito dócil e alegre, que esta em busca de nova família</p>
                            </div>
                        </div>
                        <div class="botoescrud">
                            <div class="botaocrudv" > <a href="">Visualizar</a>
                            </div>

                            <div class="botaocrude"><a href="">Editar</a>
                            </div>

                            <div class="botaocrudex"><button name="" type="submit">Excluir</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="conteudo">

                    <div class="borda">
                        <div class="dadosconteudo">
                            <div class="imgdocard">
                                <img src="{{ asset('../img/73997.jpg') }}" height="120">
                            </div>

                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Bob</p>
                                <p>Sexo: Macho</p>
                                <p>Descrição: É umca de nova famíliaÉ um cachorro muito dócil e alegre, que esta em busca de nova família</p>
                            </div>
                        </div>
                        <div class="botoescrud">
                            <div class="botaocrudv"><a href="{{route('pet.visualizar')}}">Visualizar</a>
                            </div>

                            <div class="botaocrude"><a href="{{route('pets')}}">Editar</a></div>

                            <div class="botaocrudex"><button name="" type="submit">Excluir</button>
                            </div>

                        </div>
                    </div>


                    <div class="conteudo">
                        <div class="informacoes">
                            <div class="borda">
                          <div class="dadosconteudo">
                            <div class="imgdocard">
                              <img src="{{ asset('../img/73997.jpg')}}" height="120">
                            </div>
            
                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Bob</p>
                                <p>Sexo: Macho</p>
                                <p>Descrição: É um cachorro muito dócil e alegre, que esta em busca de nova família</p>
                            </div>
                          </div>
                          <div class="botoescrud">
                            <div class="botaocrudv"> <a href="">Visualizar</a>
                            </div>
            
                            <div class="botaocrude"><a href="">Editar</a>
                            </div>
            
                            <div class="botaocrudex"><button name="" type="submit">Excluir</button>
                            </div>
            
                          </div>
                        </div>
                        </div>

                </div>
            </div>
    </section>

</main>


@include('includes.rodape')
<script src="{{ asset('./js/main.js') }}"></script>
