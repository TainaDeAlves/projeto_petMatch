<footer class="rodape">
    <div class="logo">
        <img src="{{ asset('./img/logo3.png')}}" alt="" width="200" />
        <a href="#" class="texto">A plataforma que <br />
            une corações e patinhas.</a>

        <a href="#"><img src="{{asset('./img/facebook.png')}}" alt="facebok" class="imgf" /></a>
        <a href="#"><img src="{{asset('./img/instagram.png')}}" alt="instagram" /></a>
        <a href="#"><img src="{{asset('./img/twiter.png')}}" alt="twiter" /></a>
        <a href="#"><img src="{{asset('./img/linkedin.png')}}" alt="linkedin" /></a>


    </div>
    <div class="categorias">
        <h1>Categorias</h1>
        <a href="{{route('adote')}}">Adote</a>
        <a href="{{route('contribuir')}}">Contribua</a>
        <!-- <a href="#">Blog</a> -->
    </div>

    <div class="pet-match">
        <h2>PetMatch</h2>
        <a href="{{route('sobreNos')}}">Sobre nós</a>
        <a href="{{route('contato')}}">Contato</a>
        <a href="{{route('faq')}}">FAQ</a>
        <a href="{{route('politica')}}">Política de Privacidade</a>
    </div>

    <div class="Contatos">
        <h3>Contatos</h3>
        <a href="#">Endereço, 00</a>
        <a href="#">(14) 99999-9999</a>
        <a href="#">contato@petmatch.com</a>
    </div>

    <div class="baixe-apps">
        <h4>Baixe o nosso app</h4>
        <img src="{{asset('./img/playstore.png')}}" alt="playstore" />
        <img src="{{asset('./img/appstore.png')}}" alt="appstore" />
    </div>
</footer>
