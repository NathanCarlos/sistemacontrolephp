<?php
//Sessão
session_start();
//Conexão.
require_once '../php_action_clientes/db_connect.php';

if(isset($_POST['btn-editar'])):
	$codigobarras = mysqli_escape_string($connect, $_POST['codigobarras']);//Filtro para evitar que o usuário insira códigos html ou mysql no banco de dados.
	$descricao = mysqli_escape_string($connect, $_POST['descricao']);
	$valor = mysqli_escape_string($connect, $_POST['valor']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE produtos SET codigobarras = '$codigobarras', descricao = '$descricao', valor = '$valor', quantidade = '$quantidade' WHERE id = '$id'";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../produtos/produtos.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar cadastro";
		header('Location: ../produtos/produtos.php');
	endif;
endif;

?>