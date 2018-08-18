<?php
//Sessão
session_start();
//Conexão.
require_once '../php_action_clientes/db_connect.php';

if(isset($_POST['btn-deletar'])):
	$id = mysqli_escape_string($connect, $_POST['id']);
	$sql = "DELETE FROM lancamentos WHERE id = '$id'";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Lançamento deletado com sucesso!";
		header('Location: ../financeiro/financeiro.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar Lançamento";
		header('Location: ../financeiro/financeiro.php');
	endif;
endif;

?>