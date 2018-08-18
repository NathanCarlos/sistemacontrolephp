<?php
//Sessão
session_start();
//Conexão
include_once 'php_action_clientes/db_connect.php';

	$nomeusuario = mysqli_escape_string($connect, $_POST['nome']);;
	$senhausuario = mysqli_escape_string($connect, $_POST['senha']);
	$emailusuario = mysqli_escape_string($connect, $_POST['email']);

	$sql = "INSERT INTO `usuarios` (`email_usuario`, `senha_usuario`, `nome_usuario`) VALUES ('$emailusuario', '$senhausuario', '$nomeusuario');";
	if(mysqli_query($connect, $sql)){
		$email = $_POST['email'];
	   	$senha = $_POST['senha'];
	    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email'";//Comando sql que faz a busca no banco de dados para o respectivo email.
	    $resultado = mysqli_query($connect, $sql);//Executa a query, trazendo os resultados.
	    if(!empty($resultado)){//Verifica se o resultado da query é diferente de nulo.
	        $informacoes = mysqli_fetch_array($resultado);//Percorre a tabela buscando as informações.
	        setcookie('emailusuario',$informacoes['email_usuario'], time()+3600);//Armazena o email do usúario no cookie.
	        setcookie('nomeusuario',$informacoes['nome_usuario'], time()+3600);//Armazena o nome do usuário no cookie.
	        setcookie('idusuario',$informacoes['id_usuario'], time()+3600);//Armazena o nome do usuário no cookie.
	        Header ('Location: menu.php');
    	}
    	else{
        header('location: index.html');
    	}
	}
	else{
		$_SESSION['mensagem'] = "Esse Email Já Existe, Tente Outro!";
	    header('location: index.php');
	    
	}

?>