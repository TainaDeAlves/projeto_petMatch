

@extends("layout.home")

    <header id="cabecalho" class="container paginainterna">
@include("includes.barratopo")


    </header>
    <main class="container">

        <div class="bannerprincipal">
            <div class="mensagem">
                <p>
                    <span class="textoamarelo">Faça parte desta corrente de amor</span><br>
                    Contribua com as ONGs que resgatam, protegem e oferecem um lar para os nossos amigos
                    peludos.<br>
                    <span>Sua doação é a diferença entre um final feliz e</span> <br><span>um novo começo para
                        eles.</span>
                </p>
                <div class="botoes">
                    <div class="botao3">
                        <a href="adote-um-amigo.html"> Adotar agora </a>
                    </div>

                    <div class="botao3">
                        <a href="ongs.html"> Ongs parceiras </a>
                    </div>


                </div>
            </div>
            <div class="imagemFoto">
             <img src="{{asset("./img/contribuiçãopetmatch.png")}}" alt="" class="fotocachorro" height="450"> 
            </div>
        </div>

        <h2 class="titulo2">Como <span>doar?</span> </h2>
        <div class="doar">
            <div class="imgnumero">
                <img src="{{asset("./img/one_3522837.png")}}" alt="" height="45">
                Escolha a ONG
            </div>

            <div class="imgnumero">
                <img src="{{asset("./img/two_3522860.png")}}" alt="" height="45">A forma de contribuição<br> que
                deseja fornecer

            </div>
            <div class="imgnumero">
                <img src="{{asset("./img/three_3522882.png")}}" alt="" height="45">
                E só confirmar sua doação
            </div>
        </div>

        <h2 class="titulo2">Formas de contribuir</h2>
        <div class="formascontribuir">
            <div>
                <a href="">
                    <img src="{{asset("img/payment_1067281.png")}}" alt="" width="55">
                    <p>Finaceiro</p>
                </a>
            </div>

            <div>
                <a href="">
                    <img src="{{asset("./img/dog-food_5618238.png")}}" alt="" width="55">
                    <p>Alimenstos</p>
                </a>
            </div>

            <div>
                <a href="">
                <img src="{{asset("./img/beauty-saloon_2138261.png")}}" alt="" width="55">
                <p>Utensílios</p>
            </a>
            </div>
        </div>

        <div class="textindicativo">
            <h2>Para doar entre <span>em contato </span>com a  ONG da sua <span>preferncia</span>  </h2>
        </div>
    </main>
@include("includes.rodape")

    <script src="{{asset("./js/main.js")}}"></script>
