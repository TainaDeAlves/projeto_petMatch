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
                                <img src="{{ asset('../img/Homem 1.png') }}" height="120">
                            </div>

                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Mario</p>
                                <p>Email: mario@gmail.com</p>
                                <p>Senha: *********</p>
                                <p>Genero: Masculio</p>
                                <p>Descrição: Olá! Meu nome é Mário e estou em busca de um novo amigo de quatro patas <br> para compartilhar minha vida. Sou um homem de 32 anos, apaixonado por animais e com um <br> grande amor pelos cães e gatos.</p>
                            </div>
                        </div>
                        <div class="botoescrud">
                            <div class="botaocrudv" > <a href="{{route('admin.usuarios.visualizar')}}">Visualizar</a>
                            </div>

                            <div class="botaocrude"><a href="admin.usuarios.editar">Editar</a>
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
                                <img src="{{ asset('../img/Homem 1.png') }}" height="120">
                            </div>

                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Mario</p>
                                <p>Email: mario@gmail.com</p>
                                <p>Senha: *********</p>
                                <p>Genero: Masculio</p>
                                <p>Descrição: Olá! Meu nome é Mário e estou em busca de um novo amigo de quatro patas <br> para compartilhar minha vida. Sou um homem de 32 anos, apaixonado por animais e com um <br> grande amor pelos cães e gatos.</p>
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
                              <img src="{{ asset('../img/Homem 1.png')}}" height="120">
                            </div>
            
                            <div class="dadosprincipais">
                                <p>ID:1</p>
                                <p>Nome: Mario</p>
                                <p>Email: mario@gmail.com</p>
                                <p>Senha: *********</p>
                                <p>Genero: Masculio</p>
                                <p>Descrição: Olá! Meu nome é Mário e estou em busca de um novo amigo de quatro patas <br> para compartilhar minha vida. Sou um homem de 32 anos, apaixonado por animais e com um <br> grande amor pelos cães e gatos.</p>
                            </div>
                          </div>
                          <div class="botoescrud">
                            <div class="botaocrudv"> <a href="{{route("admin.usuarios.visualizar")}}">Visualizar</a>
                            </div>
            
                            <div class="botaocrude"><a href="{{route("admin.usuarios.editar")}}">Editar</a>
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
