<?php
//Sessão
session_start();
//Conexão.
include_once '../php_action_clientes/db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$descricao = mysqli_escape_string($connect, $_POST['descricao']);
	$valor = mysqli_escape_string($connect,$_POST['valor']);

	$sql = "INSERT INTO lancamentos (descricao, valor, id_usuariofk) VALUES ('$descricao', '$valor', '$_COOKIE[idusuario]');";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../financeiro/financeiro.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../financeiro/financeiro.php');
	endif;
endif;

?>