@extends('layout.home')


@section("conteudo")


<header id="cabecalho" class="container paginainterna">
    @include('includes.barratopo')



</header>
<main class="container" id="containeradotar">

    @include('includes.nav_admin')

    <section class="naveconteudo">

        <div class="botaoformcadastrop" >
            <a href="{{route("admin.usuarios.cadastrar")}}">Cadastrar</a>  
          </div>

        <div class="listadoconteudo">


            <div class="conteudo">
                <div class="informacoes">
                    <div class="borda">
                        <div class="dadosconteudo">
                            <div class="imgdocard">
                                <img src="{{ asset('./img/Homem 1.png') }}" height="120">
                            </div>

                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Mario</p>
                                <p>Genero: Masculino</p>
                                <p>Descrição: Olá! Meu nome é Mário e estou em busca de um novo amigo <br>de quatro patas para compartilhar minha vida. <br> Sou um homem de 32 anos, apaixonado por animais e com um grande amor pelos cães e gatos.</p>
                            </div>
                        </div>
                        <div class="botoescrud">
                            <div class="botaocrudv" > <a href="{{route ("admin.usuarios.visualizar")}}">Visualizar</a>
                            </div>

                            <div class="botaocrude"><a href="{{route ("admin.usuarios.editar")}}">Editar</a>
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
                                <img src="{{ asset('./img/Homem 1.png') }}" height="120">
                            </div>

                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Mario</p>
                                <p>Genero: Masculino</p>
                                <p>Descrição: Olá! Meu nome é Mário e estou em busca de um novo amigo <br> de quatro patas para compartilhar minha vida. <br> Sou um homem de 32 anos, apaixonado por animais e com um grande amor pelos cães e gatos.</p>

                            </div>
                        </div>
                        <div class="botoescrud">
                            <div class="botaocrudv"><a href="{{route('admin.usuarios.visualizar')}}">Visualizar</a>
                            </div>

                            <div class="botaocrude"><a href="{{route('admin.usuarios.editar')}}">Editar</a></div>

                            <div class="botaocrudex"><button name="" type="submit">Excluir</button>
                            </div>

                        </div>
                    </div>


                    <div class="conteudo">
                        <div class="informacoes">
                            <div class="borda">
                          <div class="dadosconteudo">
                            <div class="imgdocard">
                              <img src="{{ asset('./img/Homem 1.png')}}" height="120">
                            </div>
            
                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Mario</p>
                                <p>Genero: Masculino</p>
                                <p>Descrição: Olá! Meu nome é Mário e estou em busca de um novo amigo <br> de quatro patas para compartilhar minha vida. <br> Sou um homem de 32 anos, apaixonado por animais e com um grande amor pelos cães e gatos.</p>
                            </div>
                          </div>
                          <div class="botoescrud">
                            <div class="botaocrudv"> <a href="{{route('admin.usuarios.visualizar')}}">Visualizar</a>
                            </div>
            
                            <div class="botaocrude"><a href="{{route('admin.usuarios.editar')}}">Editar</a>
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

@endsection

