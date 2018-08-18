<?php
include_once 'includes/mensagem.php';
?>
<?php
if(isset($_COOKIE['emailusuario']) && isset($_COOKIE['idusuario'])){
    Header('Location: menu.php');
}
?>
<html lang="br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>OnGest</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
      <!--Estrutura do Modal 1-->
      <div id="modal1" class="modal">
      <div class="modal-content">
        <form action="login.php" method="POST">
          <h4>Fazer Login</h4>
          <p>Preencha seus dados para fazer login.</p>
          <div class="input-field col s12">
          <input type="email" name="email" id="email" maxlength="255">
          <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
          <input type="password" name="senha" id="senha" maxlength="255">
          <label for="senha">Senha</label>
          </div>
          <div class="modal-footer">
          <button type="submit" name="btn-entrar" class="btn blue left">Entrar</button>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn blue left">Cancelar</a>
          </div>
         </form>
        </div>
      </div>
            <!--Estrutura do Modal 2-->
      <div id="modal2" class="modal">
      <div class="modal-content">
        <form action="cadastro.php" method="POST">
          <h4>Registrar-se</h4>
          <p>Preencha seus dados para se cadastrar.</p>
          <div class="input-field col s12">
          <input type="text" name="nome" id="nome" maxlength="100" required>
          <label for="nome">Nome</label>
          </div>
          <div class="input-field col s12">
          <input type="email" name="email" id="email" maxlength="100">
          <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
          <input type="password" name="senha" id="senha" maxlength="50" required>
          <label for="senha">Senha</label>
          </div>
          <div class="modal-footer">
          <button type="submit" name="btn-entrar" class="btn blue left">Concluir</button>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn blue left">Cancelar</a>
          </div>
         </form>
        </div>
      </div>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">OnGest</a>
      <ul class="right hide-on-med-and-down">
        <!-- Modal Trigger -->
       <a class="modal-trigger left" href="#modal1">Login</a>
       <a class="modal-trigger left" href="#modal2">Cadastra-se</a>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <a class="modal-trigger" href="#modal1">Login</a>
        <a class="modal-trigger" href="#modal2">Cadastrar-se</a>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">OnGest</h1>
        <div class="row center">
          <h5 class="header col s12 light">Está buscando uma maneira de controlar o seu estoque e clientes?</h5>
        </div>
        <div class="row center">
          <a href="#modal2" id="download-button" class="modal-trigger btn-large waves-effect waves-light blue darken-3">Começar</a>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-darken-3"><i class="material-icons">person_pin</i></h2>
            <h5 class="center">Controle de Clientes</h5>

            <p class="light">Com a nossa Plataforma você pode controlar os seus clientes de forma fácil e rápida.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-darken-3"><i class="material-icons">storage</i></h2>
            <h5 class="center">Controle de Produtos</h5>

            <p class="light">A maior vantagem de controlar os seus produtos com o nosso sitema é poder visualiza-los de forma mais simples e agradável.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-darken-3"><i class="material-icons">attach_money</i></h2>
            <h5 class="center">Controle do Financeiro</h5>

            <p class="light">Controle os seus custos com a nossa ferramenta e nunca mais tenha prejuízos sem saber de onde eles vem.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer grey darken-4">
    <div class="footer-copyright">
      <div class="container">
          ©AlphaTechnologies
      </div>
    </div>
  </footer>

  <!--  Scripts--><!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
      M.AutoInit();
  </script>
  </body>
</html>
