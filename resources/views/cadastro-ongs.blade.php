@extends('layout.home')


  <body>
    <header id="cabecalho" class="container imagemBanner">

     @include('includes.barratopo')

      <div id="banner">
        
        <div class="mensagem-banner">
          <h1>ADOTE, AME E SEJA AMADO</h1>
          <p>Descubra a felicidade em quatro patas!</p>
          <p>
            Escolha seu novo amigo e preencha sua vida com amor e lealdade
            incondicionais.
          </p>

          <a href="adote-um-amigo.html" class="botao-adotar"> Adotar agora </a>
        </div>
      </div>
    </header>
    <main>
      <hr />
      <div class="container-Ongs">
        <div class="bloco-Ong">
          <h1 class="texto-Ong">Cadastro da ONG</h1>
          <p>
            <label for="nomeong" name="nomeong" id="nomeong"></label>
            <input type="text" placeholder="Nome Da ONG" id="nomeong" />
          </p>
          <p>
            <label for="email" name="email" id="emailong"></label>
            <input type="text" placeholder="E-mail Da ONG" id="emailong" />
          </p>
          <p>
            <label for="cnpjong" name="cnpjong" id="cnpjong"></label>
            <input type="text" placeholder="CNPJ Da ONG" id="cnpjong" />
          </p>
          <p>
            <label for="cidadeong" name="cidadeong" id="cidadeong"></label>
            <input type="text" placeholder="Cidade Da ONG" id="cidadeong" />
          </p>
          <p>
            <label
              for="enderecoong"
              name="enderecoong"
              id="enderecoong"
            ></label>
            <input type="text" placeholder="Endereço Da ONG" id="enderecoong" />
          </p>
          <p>
            <select name="estado" id="estadoong" >
              <option value="">Selecine o Estado Que a Sua Ong Reside</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </p>
          <p>
            <label for="senhaong" name="senhaong" id="senhaong"></label>
            <input type="password" placeholder="Senha" id="senhaong" />
          </p>
          <p>
            <label
              for="confirmarsenha "
              name="confirmarsenha"
              id="confirmarsenha"
            ></label>
            <input
              type="password"
              placeholder="Confirmar Sua Senha"
              id="confirmarsenha"
            />

           
          </p>
          <a href="login.html" id="botaoEntrar">Login</a>

        
        </div>
      </div>

      <hr/>

      @include('includes.rodape')
    </main>

    <script src="{{asset("./js/main.js")}}"></script>
 
