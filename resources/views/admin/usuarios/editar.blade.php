@extends('layout.home')




<header id="cabecalho" class="container paginainterna">
    @include('includes.barratopo')



</header>
<main class="container" id="containeradotar">

    @include('includes.nav_admin')

    @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif

    <form method="post" action="{{ route('usuario.update', ['id' => $user->id]) }}">
        @csrf
        @method('put')
        <div class="cadastre-se">

            <div class="cadastro">
                <h1 class="texto1">Editar Usuário</h1>
                <label for="nome"></label>
                <input type="text" id="nome" name="nome" placeholder="Nome" class="name"
                    value="{{ old('nome', $user->nome) }}">

                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="E-mail" class="email"
                    value="{{ old('nome', $user->email) }}">

                <label for="cidade"></label>
                <input type="text" id="cidade" name="cidade" placeholder="Cidade" class="city"
                    value="{{ old('nome', $user->cidade) }}">

                <label for="estado"></label>
                <input type="text" id="estado" name="estado" placeholder="Estado" class="uf"
                    value="{{ old('nome', $user->estado) }}">

                <label for="password"></label>
                <input type="password" id="passoword" name="password" placeholder="Senha" class="sen">

                <lable for="password_confirmation"></lable>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirme sua senha" class="Confirme">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('admin.usuarios.index') }}" class="btn btn-danger">Cancelar</a>


            </div>
        </div>
    </form>

</main>


@include('includes.rodape')
<script src="{{ asset('./js/main.js') }}"></script>
