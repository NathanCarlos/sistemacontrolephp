<?php
//Sessão
session_start();
//Conexão.
include_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);//Filtro para evitar que o usuário insira códigos html ou mysql no banco de dados.
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);

	$sql = "INSERT INTO clientes (nome, endereco, email, telefone, id_usuariofk) VALUES
	('$nome', '$endereco', '$email', '$telefone','$_COOKIE[idusuario]');";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../clientes/clientes.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../clientes/clientes.php');
	endif;
endif;

?>