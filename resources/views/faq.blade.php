@extends("layout.home")

    <header id="cabecalho" class="container paginainterna">
        @include("includes.barratopo")


    </header>
    <main class="container conteudo">
        <h2 class="titulo2">FAQ</h2>


        <section id="faq">
            <details class="perguntaseresposta">

                <summary class="perguntafaq">
                    <div class="perguntafrequentes">
                        <i class="fa-solid fa-paw fa-2xl" style="color: #B197FC;"></i>Como me cadastro ?
                    </div>

                    <i class="fa-solid fa-chevron-right fa-2xl" style="color: #000000;"></i>
                </summary>
                <div class="textchamado">
                    <p>
                        Faça login na conta.
                        Acesse as configurações da conta.
                        Encontre a opção de exclusão, geralmente em "Segurança", "Privacidade" ou "Conta".
                        Confirme a exclusão quando solicitado.
                        Siga as instruções adicionais, como inserir a senha novamente.
                        Verifique o email e confirme a exclusão, se necessário.
                        Receba a confirmação de que a conta foi excluída.
                        
                    </p>
                </div>
            </details>

            <details class="perguntaseresposta">

                <summary class="perguntafaq">
                    <div class="perguntafrequentes">
                        <i class="fa-solid fa-paw fa-2xl" style="color: #B197FC;"></i>Como me cadastro ?
                    </div>

                    <i class="fa-solid fa-chevron-right fa-2xl" style="color: #000000;"></i>
                </summary>
                <div class="textchamado">
                    <p>
                        Faça login na conta.
                        Acesse as configurações da conta.
                        Encontre a opção de exclusão, geralmente em "Segurança", "Privacidade" ou "Conta".
                        Confirme a exclusão quando solicitado.
                        Siga as instruções adicionais, como inserir a senha novamente.
                        Verifique o email e confirme a exclusão, se necessário.
                        Receba a confirmação de que a conta foi excluída.
                        
                    </p>
                </div>
            </details>

            <details class="perguntaseresposta">

                <summary class="perguntafaq">
                    <div class="perguntafrequentes">
                        <i class="fa-solid fa-paw fa-2xl" style="color: #B197FC;"></i>Como me cadastro ?
                    </div>

                    <i class="fa-solid fa-chevron-right fa-2xl" style="color: #000000;"></i>
                </summary>
                <div class="textchamado">
                    <p>
                        Faça login na conta.
                        Acesse as configurações da conta.
                        Encontre a opção de exclusão, geralmente em "Segurança", "Privacidade" ou "Conta".
                        Confirme a exclusão quando solicitado.
                        Siga as instruções adicionais, como inserir a senha novamente.
                        Verifique o email e confirme a exclusão, se necessário.
                        Receba a confirmação de que a conta foi excluída.
                        
                    </p>
                </div>
            </details>
        </section>
        <section id="orientação">
            <h2> entrar em contato conosco através do:</h2>

            <div class="container" id="contatonapaginafaq">
                <div class="nofaqcontato">
                    <a href="http://wa.me/551499999999?text=Olá, Tudo Bem, como podemos te ajudar ?"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
                    <p>Whats</p>
                </div>

                <p></p>
                <div class="nofaqcontato">
                    <a href="mailto:contato@petmatch.com"><i class="fa-regular fa-envelope fa-2xl" ></i></a>
                    <p>Email</p>
                </div>
            </div>
        </section>




    </main>

    
    @include("includes.rodape")
    <script src="{{asset("./js/main.js")}}"></script>