@extends('layout.home')




<header id="cabecalho" class="container paginainterna">
    @include('includes.barratopo')


    
</header>
<main class="container" id="containeradotar">
    
    @include('includes.nav_admin')
    
    <section class="naveconteudo">
        <form action="{{ route('admin.pets.editar', $pet->id) }}" method="POST">
            @csrf
            @method('PUT')



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
                            <div class="botaocrudv" > <a href="{{route("admin.pets.visualizar")}}">Visualizar</a>
                            </div>

                            <div class="botaocrude"><a href="{{route("admin.pets.editar")}}">Editar</a>
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
                            <div class="botaocrudv"><a href="{{route('admin.pets.visualizar')}}">Visualizar</a>
                            </div>

                            <div class="botaocrude"><a href="{{route('admin.pets.editar')}}">Editar</a></div>

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
                            <div class="botaocrudv"> <a href="{{route('admin.pets.visualizar')}}">Visualizar</a>
                            </div>
            
                            <div class="botaocrude"><a href="{{route("admin.pets.editar")}}">Editar</a>
                            </div>
            
                            <div class="botaocrudex"><button name="" type="submit">Excluir</button>
                            </div>
            
                          </div>
                        </div>
                        </div>

                </div>
            </div>
        </form>
    </section>

</main>


@include('includes.rodape')
<script src="{{ asset('./js/main.js') }}"></script>
