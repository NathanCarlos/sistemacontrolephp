<?php
    //Sessão
    session_start();
    //Conexão.
    include_once 'php_action_clientes/db_connect.php';
    //Recebe as informações da tela de login.
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'";//Comando sql que faz a busca no banco de dados para o respectivo email.
    $resultado = mysqli_query($connect, $sql);//Executa a query, trazendo os resultados.
    if(!empty($resultado)){//Verifica se o resultado da query é diferente de nulo.
        $informacoes = mysqli_fetch_array($resultado);//Percorre a tabela buscando as informações.
        setcookie('emailusuario',$informacoes['email_usuario'], time()+3600);//Armazena o email do usúario no cookie.
        setcookie('nomeusuario',$informacoes['nome_usuario'], time()+3600);//Armazena o nome do usuário no cookie.
        setcookie('idusuario',$informacoes['id_usuario'], time()+3600);//Armazena o nome do usuário no cookie.
        $_SESSION['mensagem'] = "Email ou Senha Inválidos";
        Header ('Location: menu.php');
    }
    else if(empty($resultado)){
        $_SESSION['mensagem'] = "Email ou Senha Inválidos";
        header('location: index.php');
    }
    
?>