@extends('layout.home')


@section('conteudo')
    <header id="cabecalho" class="container paginainterna">
        @include('includes.barratopo')



    </header>
    <main class="container" id="containeradotar">

        @include('includes.nav_admin')

        <section class="naveconteudo">

            <div class="botaoformcadastrop">
                <a href="{{ route('admin.usuarios.cadastrar') }}">Cadastrar</a>
            </div>



            <div class="listadoconteudo">

                @foreach ($users as $user)
                    <div class="conteudo">

                        <div class="borda">
                            <div class="dadosconteudo">
                                <div class="dadosprincipaisuser">
                                    <p>ID:{{ $user->id }}</p>
                                    <p>Nome: {{ $user->nome }}</p>
                                    <p>Email: {{ $user->email }}</p>
                                    <p>Cidade: {{ $user->cidade }}</p>
                                    <p>Estado: {{ $user->estado }}</p>
                                </div>
                            </div>
                            <div class="botoescrud">
                                <div class="botaocrudv"><a
                                        href="{{ route('admin.usuarios.visualizar', ['id' => $user->id]) }}">Visualizar</a>
                                </div>

                                <div class="botaocrude"><a
                                        href="{{ route('admin.usuarios.editar', ['id' => $user->id]) }}">Editar</a> </div>

                                <form action="{{ route('delete.user', ['id' => $user->id]) }}" method="post" 
                                    style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                   
                                    <button type="submit" class="btn btn-danger" class="btndedelete" 
                                        onclick="return confirm('Realmente deseja exluir esse usúario ?')">Excluir</button>
                                </form>
                            </div>

                        </div>


                    </div>
                @endforeach

            </div>

        </section>

    </main>


    @include('includes.rodape')
@endsection
