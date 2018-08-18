<?php
//Sessão
session_start();
//Conexão.
require_once '../php_action_clientes/db_connect.php';

if(isset($_POST['btn-deletar'])):
	$id = mysqli_escape_string($connect, $_POST['id']);
	$sql = "DELETE FROM produtos WHERE id = '$id'";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Produto deletado com sucesso!";
		header('Location: ../produtos/produtos.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar produto";
		header('Location: ../produtos/produtos.php');
	endif;
endif;

?>