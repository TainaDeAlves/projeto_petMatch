@extends('layout.home')

<body>
    <header id="cabecalho" class="container paginainterna">
        @include('includes.barratopo')

        </div>



    </header>
    <main class="container conteudo">
        <h2 class="titulo2">Politica De Privacidade</h2>


        <p class="politica">O PetMatch valoriza e respeita a privacidade de seus usuários. Esta Política de Privacidade
            descreve como coletamos, usamos, compartilhamos e protegemos as informações pessoais dos usuários de nosso
            site e aplicativo.
            Informações Coletadas
            Ao utilizar o PetMatch, podemos coletar as seguintes informações:
            Informações fornecidas pelo usuário: Isso inclui informações pessoais fornecidas durante o registro, como
            nome, endereço de e-mail, número de telefone, e informações sobre seus animais de estimação, como nome,
            raça, idade e outras características.
            Informações de uso: Coletamos automaticamente informações sobre como você usa o PetMatch, incluindo os tipos
            de dispositivos que você usa, seu endereço IP, informações de registro, ações tomadas dentro do aplicativo,
            entre outras.
            Cookies e Tecnologias Semelhantes: Podemos usar cookies e tecnologias semelhantes para melhorar a
            experiência do usuário, personalizar o conteúdo e anúncios, bem como para análises e segurança.
            Uso das Informações
            Utilizamos as informações coletadas para os seguintes fins:
            Fornecer e melhorar os serviços do PetMatch, incluindo o desenvolvimento de novos recursos e
            funcionalidades.
            Personalizar a experiência do usuário e fornecer conteúdo relevante.
            Comunicar-se com os usuários, incluindo o envio de atualizações, notificações e informações relacionadas ao
            serviço.
            Analisar o uso do PetMatch e realizar pesquisas para entender e melhorar nossos serviços.
            Compartilhamento de Informações
            Não compartilhamos informações pessoais dos usuários com terceiros, exceto nas seguintes circunstâncias:
            Com o consentimento do usuário.
            Com prestadores de serviços terceirizados que nos auxiliam na operação do PetMatch, sujeitos a obrigações
            contratuais de confidencialidade.
            Quando exigido por lei ou para proteger nossos direitos legais.
            Proteção de Informações Pessoais
            Tomamos medidas para proteger as informações pessoais dos usuários contra acesso não autorizado, uso
            indevido ou divulgação.
            Seus Direitos
            Os usuários têm o direito de acessar, corrigir ou excluir suas informações pessoais. Para exercer esses
            direitos ou para fazer perguntas sobre esta Política de Privacidade, entre em contato conosco através dos
            canais fornecidos abaixo.
            Alterações nesta Política de Privacidade
            Podemos atualizar esta Política de Privacidade periodicamente. Se fizermos alterações significativas,
            notificaremos os usuários por meio do site ou do aplicativo.
            Contato
            Se você tiver dúvidas ou preocupações sobre esta Política de Privacidade ou sobre o tratamento de suas
            informações pessoais, entre em contato conosco através do seguinte endereço de e-mail:
        <p class="email"> petmatch@gmail.com.</p>


    </main>

    @include('includes.rodape')
    <script src="{{asset('./js/main.js')}}"></script>
</body>

</html>
