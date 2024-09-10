@extends('layout.home')

@section('conteudo')
    <header id="cabecalho" class="container paginainterna">
        @include('includes.barratopo')

    </header>

    <body>
        <main class="container" id="containeradotar">
            @if (session('sucesso'))
                <div class="alert alert-success">
                    {{ session('sucesso') }}
                </div>
            @endif

            <form action="{{ route('cadastrosalvo') }}" method="post">
                @csrf
                <div class="cadastre-se">

                    <div class="cadastro">
                        <h1 class="texto1">Cadastre-se Aqui</h1>

                        <p>
                            <input type="text" id="nome" name="nome" placeholder="Nome" class="name">
                        </p>


                        <p>
                            <input type="email" id="email" name="email" placeholder="E-mail" class="email" />
                        </p>

                        <p>
                            <input type="text" id="cidade" name="cidade" placeholder="Cidade" class="city" />
                        </p>


                        <p>
                            <input type="text" id="estado" name="estado" placeholder="Estado" class="uf" />
                        </p>


                        <p>
                            <input type="password" id="passoword" name="password" placeholder="Senha" class="sen" />
                        </p>


                        <p>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirme sua senha" class="Confirme" />
                        </p>

                    </div>

                    <div class="btnuser">
                        
                        <button type="submit" class="btn btn-primary">Salvar</button><br>

                        <a href="cadastro-ongs.html" class="ONGS">Cadastro das ONGS</a>
                    </div>



                </div>
            </form>

        </main>
        @include('includes.rodape')
    </body>
@endsection
