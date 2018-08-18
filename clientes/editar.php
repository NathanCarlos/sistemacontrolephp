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
	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Editar Cliente</h3>
			<form action="../php_action_clientes/update.php" method="POST">
				<input type="hidden" value="<?php echo $dados['id']?>" name="id">
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" maxlength="100" required value="<?php echo $dados['nome']?>">
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="endereco" id="endereco" maxlength="255" required value="<?php echo $dados['endereco']?>">
					<label for="endereco">Endereço</label>
				</div>
				<div class="input-field col s12">
					<input type="email" name="email" id="email" maxlength="255" required value="<?php echo $dados['email']?>">
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone" maxlength="13" required value="<?php echo $dados['telefone']?>">
					<label for="telefone">Telefone</label>
				</div>
				<a href="clientes.php" class="btn green"><i class="material-icons">arrow_back</i></a>
				<button type="submit" name="btn-editar" class="btn"> Atualizar </button>
				
			</form>
		</div>
	</div>

<?php
//Footer
include_once '../includes/footer.php';
?>