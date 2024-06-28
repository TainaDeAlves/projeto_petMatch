@extends('layout.home')

<header id="cabecalho" class="container paginainterna">

    @include('includes.barratopo')

</header>
<main>
    <div class="container">
        <div class="textsugerirfaq">
            <div class="textfaq">
                <h2>Perguntas frequentes?</h2>
                <p>Você também pode acessar<br> nossa página do <span>Faq</span></p>
            </div>

            <div class="botaofaq">
                <a href="faq.html"> FAQ</a>
            </div>
        </div>


        <div class="ii">
            <div class="imgcontato"></div>
            <div class="textdobackground">
                <p>A todos <br>os ouvidos !</p>
            </div>
        </div>
    </div>

    <setion class="contatoAtraves">
        <div class="container" id="meiosDeContato">
            <div class="iconecontato">
                <a href="http://wa.me/551499999999?text=Olá, Tudo Bem, como podemos te ajudar ?"><i
                        class="fa-brands fa-whatsapp fa-2xl" style="color: #ffffff;"></i></a>
            </div>

            <p>Você pode entrar em contato conosco através do:</p>
            <div class="iconecontato">
                <a href="mailto:contato@petmatch.com"><i class="fa-regular fa-envelope fa-2xl"
                        style="color: #ffffff;"></i></a>
            </div>
        </div>

    </setion>

    <section class="formcontato">
        <div class="container">
            <div class="textformcontato">
                <h2>Entre em cantato também conosco<br>através do site</h2>
            </div>

            <form method="post" action="#">
                <div class="formMensagem">

                    <input type="text" id="nome" name="nome" placeholder="Nome:">

                    <input type="email" id="email" name="email" placeholder="E-mail:">

                    <input type="text" id="mensagem" name="mensagem" placeholder="Mesagem:">
                </div>

                <div class="botaoenviarform">
                    <input type="submit" id="enviar" name="enviar">
                </div>
            </form>
        </div>
    </section>
</main>
@include('includes.rodape')
