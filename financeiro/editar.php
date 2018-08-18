<?php
if(isset($_COOKIE['emailusuario']) && isset($_COOKIE['idusuario'])){
//Conexão
include_once '../php_action_clientes/db_connect.php';
//Header
include_once '../includes/header.php';}
else{
    Header('Location: ../index.php');
}
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);
	$sql = "SELECT * FROM lancamentos WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Editar Lançamento</h3>
			<form action="../php_action_financeiro/update.php" method="POST">
				<input type="hidden" value="<?php echo $dados['id']?>" name="id">
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao" maxlength="255" required value="<?php echo $dados['descricao']?>">
					<label for="descricao">Descrição</label>
				</div>
				<div class="input-field col s12">
					<input type="number" name="valor" id="valor" maxlength="255" required value="<?php echo $dados['valor']?>" step="0.01">
					<label for="valor">Valor</label>
				</div>
				<a href="financeiro.php" class="btn green"><i class="material-icons">arrow_back</i></a>
				<button type="submit" name="btn-editar" class="btn"> Atualizar </button>
				
			</form>
		</div>
	</div>

<?php
//Footer
include_once '../includes/footer.php';
?>