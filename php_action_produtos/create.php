<?php
//Sessão
session_start();
//Conexão.
require_once '../php_action_clientes/db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$codigobarras = mysqli_escape_string($connect, $_POST['codigobarras']);//Filtro para evitar que o usuário insira códigos html ou mysql no banco de dados.
	$descricao = mysqli_escape_string($connect, $_POST['descricao']);
	$valorproduto = $_POST['valorproduto'];
	$quantidade = $_POST['quantidade'];

	$sql = "INSERT INTO produtos (codigobarras, descricao, valor, quantidade, id_usuariofk) VALUES ('$codigobarras', '$descricao', '$valorproduto', '$quantidade', '$_COOKIE[idusuario]');";
	//Verifica se a query funcionou.
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../produtos/produtos.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../produtos/produtos.php');
	endif;
endif;

?>