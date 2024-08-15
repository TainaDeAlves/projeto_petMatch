@extends('layout.home')




<header id="cabecalho" class="container paginainterna">
    @include('includes.barratopo')



</header>
<main class="container" id="containeradotar">

    @include('includes.nav_admin')
    
    <section id="visualizarpet">
        <div class="titulovisualizar">
            <h1>Visualizar <i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i></h1>
        </div>

        <section id="informacoespet">
            <div class="fotoscadastradas">
                <h2>Fotos</h2>
                <div class="img" id="inseririmg">

                    <img src="{{asset("./img/73997.jpg")}}" alt="fotopet" class="img1">
                    <img src="{{asset("./img/73997.jpg")}}" alt="fotopet" class="img2">
                    <img src="{{asset("./img/73997.jpg")}}" alt="fotopet" class="img3">
    
                </div>
            </div>
            
            <ul class="listadedados">
                
                <div class="dadosuser">
                  <li><strong>Nome do pet:</strong> Bob</li>
                  <li><strong>Sexo:</strong> Macho</li>
                  <li> <strong>Raça:</strong>golden retriever</li>
                  <li><strong>Localização:</strong> Marilia-SP</li>
                  <li><strong>Porte:</strong>Medío</li>
                  <li><strong>Especie:</strong>Cachorro</li>
                </div>
                
                <div>
                    <h2><strong>Destaque:</strong></h2>

                    <div class="destaquepet">

                        <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>Alegre</strong></p>
                        <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>Compangeiro</strong> </p>
                        <p><i class="fa-solid fa-paw fa-xl" style="color: #B197FC;"></i> <strong>Amigavel</strong> </p>
        
                    </div>
                </div>
      
               
              </ul>

        </section>

    </section>
</main>


@include('includes.rodape')
<script src="{{ asset('./js/main.js') }}"></script>
