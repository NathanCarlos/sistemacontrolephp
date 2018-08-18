<?php
//Sessão
session_start();
//Conexão.
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);//Filtro para evitar que o usuário insira códigos html ou mysql no banco de dados.
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE clientes SET nome = '$nome', endereco = '$endereco', email = '$email', telefone = '$telefone' WHERE id = '$id'";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../clientes/clientes.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar cadastro";
		header('Location: ../clientes/clientes.php');
	endif;
endif;

?>