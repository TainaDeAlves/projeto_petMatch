<div class="barratopo">
    <div id="logo">
      <img src="{{asset('./img/logo3.png')}}" alt="logo" width="150" />
    </div>

    <nav id="menu">
      <ul>
        <li>
          <a href="{{route('home')}}">Página Inicial</a>
        </li>

        <li>
          <a href="{{route('adote')}}">Adote</a>
        </li>

        <li>
          <a href="{{route('contribuir')}}">Contribua</a>
        </li>

      </ul>
    </nav>
    <div id="FormPesquisa">
      <form>
        <input type="text" class="caixa-text" />
        <button type="submit" class="lupa">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>

    <div id="botao">
      <a href="{{route('usuario')}}">Cadastre-se</a>
      <a href="{{route('login')}}">Login</a>
    </div>
  </div>