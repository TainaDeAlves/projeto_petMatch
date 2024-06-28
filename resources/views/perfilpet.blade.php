@extends("layout.home")

<body>
    <header id="cabecalho" class="container paginainterna">
        @include("includes.barratopo")
    </header>
    <main class="container">
        <section id="destaquepet">

            <div class="infromacoesiniciais">
                <p class="nomepetperfil"><span>Bob</span> </p>
                <p>Cachorro /Macho /Porte: Medio</p>
                <p><i class="fa-solid fa-share-nodes fa-xl"></i></p>
            </div>
            <div class="img" id="inseririmg">

                <img src="{{asset("./img/73997.jpg")}}" alt="fotopet" class="img1">
                <img src="{{asset("./img/73997.jpg")}}" alt="fotopet" class="img2">
                <img src="{{asset("./img/73997.jpg")}}" alt="fotopet" class="img3">

            </div>
            <div class="destaquepet">

                <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>Alegre</strong></p>
                <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>Compangeiro</strong> </p>
                <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>Amigavel</strong> </p>

            </div>
            <div class="containerperfilpet">

                <div class="infromacoessecundarias">

                    <p>Raça: Golden retriever </p>
                    <p>localização: Marilia-SP</p>
                    <p>Publicado em 04/01/2003</p>

                </div>

                <div class="descricaopetperfil">
                    <p class="nomepetperfil"><span> Sobre o Bob</span> </p>

                    <p class="historia"> Sou muito alegre e companheiro, adoro passear e claro gosto muito de brincar na
                        agua Sou muito alegre
                        e companheiro, adoro passear e claro gosto muito de brincar na agua Sou muito alegre e
                        companheiro,
                        adoro passear e claro gosto muito de brincar na agua
                    </p>

                    <div class="botaoperfilpet">
                        <a href="formulariodeadocao.html">Quero conhecer </a>
                    </div>


                </div>
            </div>

        </section>
        <div id="carddoperfil">
            <section>

                <div class="card">
                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                                <div class="fotopet">
                                    <img src="{{asset("./img/golden retriever.jpg")}}">
                                </div>
                                <div class="coracao">
                                    <i class="fa-regular fa-heart fa-2xl"></i>
                                </div>
                                <div class="descricaopet">
                                    <p class="nomepet">Nome: Bob</p>
                                    <p class="racapet">Raça: Golden retriever</p>
                                    <p class="sobreopet">Local: Marilia-SP
                                    </p>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </section>
        </div>

    </main>


@include("includes.rodape")
    
    <script src="./js/main.js"></script>
    <script src="./js/perfilpet.js"></script>
</body>

</html>