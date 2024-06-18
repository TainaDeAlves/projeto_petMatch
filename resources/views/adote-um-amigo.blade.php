@extends('layout.home')
<!DOCTYPE html>
<html lang="pt-BR">


<body>
    <header id="cabecalho" class="container paginainterna">
       @include('includes.barratopo')



    </header>

    <main class="container" id="containeradotar">
        <h2><span>Encontre seu novo amigo</span></h2>

        <div id="buscarpet">
            <form action="" method="get" class="formpet">

                <div class="informacoepet">
                    <div class="especie ">
                        <label for="especie"></label>
                        <option value=""></option>

                        <select id="especie" name="especie">
                            <option value="TE">Todas as Especies</option>

                        </select>
                    </div>

                    <div class="sexos">
                        <lable for="sexos"></lable>
                        <option value=""></option>
                        <select name="sexo" id="sexo">
                            <option value="TS">Todos os sexos</option>
                            <option value="SF">Femia</option>
                            <option value="SM">Macho</option>
                        </select>
                    </div>

                    <div class="raca">
                        <label for="raca"></label>
                        <option value=""></option>
                        <select name="raca" id="raca">
                            <option value="">Raça</option>
                            <option value="">Golden retriever</option>

                        </select>

                    </div>
                </div>

                <div class="localidadepet">
                    <div class="estado">
                        <label for="estado"></label>
                        <option value=""></option>
                        <select name="estado" id="estado">
                            <option value="">Estado</option>
                        </select>

                    </div>

                    <div class="cidade">
                        <label for="cidade"></label>
                        <option value=""></option>
                        <select name="cidade" id="cidade">
                            <option value="">Cidade</option>
                            <option value="MA">Marilia</option>
                        </select>

                    </div>
                    <div class="botaopet">
                        <button type="submit">Buscar</button>
                    </div>


                </div>

            </form>

        </div>

        <div class="teste">

            <section id="primeirobloco">
                <div class="card">

                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                            <div class="fotopet">
                                <img src="./img/golden retriever.jpg">
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

                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                                <div class="fotopet">
                                    <img src="./img/73997.jpg">
                                </div>
                                <div class="coracao">
                                    <i class="fa-regular fa-heart fa-2xl"></i>
                                </div>
                                <div class="descricaopet">
                                    <p class="nomepet">Nome: Bob</p>
                                    <p class="racapet">Raça: Golden retriever</p>
                                    <p class="sobreopet">Local:  Marilia-SP
                                    </p>

                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                                <div class="fotopet">
                                    <img src="./img/labrador.jpg">
                                </div>
                                <div class="coracao">
                                    <i class="fa-regular fa-heart fa-2xl"></i>
                                </div>
                                <div class="descricaopet">
                                    <p class="nomepet">Nome: Bob</p>
                                    <p class="racapet">Raça: Golden retriever</p>
                                    <p class="sobreopet">Local:  Marilia-SP
                                    </p>

                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                                <div class="fotopet">
                                    <img src="./img/labrador.jpg">
                                </div>
                                <div class="coracao">
                                    <i class="fa-regular fa-heart fa-2xl"></i>
                                </div>
                                <div class="descricaopet">
                                    <p class="nomepet">Nome: Bob</p>
                                    <p class="racapet">Raça: Golden retriever</p>
                                    <p class="sobreopet">Local:  Marilia-SP
                                    </p>

                                </div>
                            </div>

                        </div>
                    </a>

                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                                <div class="fotopet">
                                    <img src="./img/labrador.jpg">
                                </div>
                                <div class="coracao">
                                    <i class="fa-regular fa-heart fa-2xl"></i>
                                </div>
                                <div class="descricaopet">
                                    <p class="nomepet">Nome: Bob</p>
                                    <p class="racapet">Raça:Golden retriever</p>
                                    <p class="sobreopet">Local: Marilia-SP
                                    </p>

                                </div>
                            </div>

                        </div>
                    </a>

                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                                <div class="fotopet">
                                    <img src="./img/labrador.jpg">
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

                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                                <div class="fotopet">
                                    <img src="./img/labrador.jpg">
                                </div>
                                <div class="coracao">
                                    <i class="fa-regular fa-heart fa-2xl"></i>
                                </div>
                                <div class="descricaopet">
                                    <p class="nomepet"> Nome: Bob</p>
                                    <p class="racapet">Raça: Golden retriever</p>
                                    <p class="sobreopet">Local:  Marilia-SP
                                    </p>

                                </div>
                            </div>

                        </div>
                    </a>

                    <a href="perfilpet.html">
                        <div class="dadospet">
                            <div class="fundoroxo">
                                <div class="fotopet">
                                    <img src="./img/labrador.jpg">
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

    @include('includes.rodape')
    <script src="./js/main.js"></script>
</body>

</html>