@extends('layout.home')

<body>
    <header id="cabecalho" class="container paginainterna">
        @include('includes.barratopo')

        </div>

       

    </header>
    <main class="container conteudo">
<h2 class="titulo2">Sobre Nós</h2>



<h2 class="titulo2">Nossa História</h2>
Desde a nossa fundação em [ano de fundação], na [cidade/país], temos nos dedicado a [breve descrição da origem da empresa]. Ao longo dos anos, crescemos e nos tornamos uma referência no setor de [setor da indústria].
Nossa Missão
Nosso propósito é [declaração da missão da empresa, ou seja, o objetivo central que ela busca alcançar]. Estamos comprometidos em [princípios ou objetivos específicos].
Nossa Visão
Vislumbramos um futuro onde [descrição do futuro desejado ou da direção para a qual a empresa está trabalhando]. Queremos ser reconhecidos por [atributos ou realizações específicas que a empresa aspira alcançar].
Nossos Valores
Nosso trabalho é guiado por valores fundamentais, incluindo [lista de valores da empresa, como integridade, inovação, comprometimento com o cliente, etc.], que são a base de todas as nossas ações e decisões.
Nossos Produtos/Serviços
Oferecemos uma gama de produtos/serviços de alta qualidade, projetados para [benefícios ou soluções oferecidas aos clientes]. Nossa equipe dedicada trabalha incessantemente para fornecer soluções inovadoras que atendam às necessidades dos nossos clientes.
      
        

    </main>

    @include('includes.rodape')
    <script src="{{asset('./js/main.js')}}"></script>
</body>

</html>