<?php
//Sessão
session_start();
//Conexão.
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	$id = mysqli_escape_string($connect, $_POST['id']);
	$sql = "DELETE FROM clientes WHERE id = '$id'";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cliente deletado com sucesso!";
		header('Location: ../clientes/clientes.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar cliente";
		header('Location: ../clientes/clientes.php');
	endif;
endif;

?>