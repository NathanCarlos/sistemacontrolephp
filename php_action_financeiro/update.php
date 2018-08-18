<?php
//Sessão
session_start();
//Conexão.
require_once '../php_action_clientes/db_connect.php';

if(isset($_POST['btn-editar'])):
	$descricao = mysqli_escape_string($connect, $_POST['descricao']);
	$valor = mysqli_escape_string($connect, $_POST['valor']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE lancamentos SET descricao = '$descricao', valor = '$valor' WHERE id = '$id'";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../financeiro/financeiro.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar lançamento";
		header('Location: ../financeiro/financeiro.php');
	endif;
endif;

?>