<?php
if(isset($_COOKIE['emailusuario']) && isset($_COOKIE['idusuario'])){
//Header
include_once '../includes/header.php';}
else{
    Header('Location: ../index.php');
}
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Novo Cliente</h3>
			<form action="../php_action_clientes/create.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" maxlength="100" required>
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="endereco" id="endereco" maxlength="255">
					<label for="endereco">Endereço</label>
				</div>
				<div class="input-field col s12">
					<input type="email" name="email" id="email" maxlength="255">
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone" maxlength="13">
					<label for="telefone">Telefone</label>
				</div>
				<a href="clientes.php" class="btn green"><i class="material-icons">arrow_back</i></a>
				<button class="btn waves-effect waves-light" type="submit" name="btn-cadastrar">Salvar
                    <i class="material-icons right">send</i>
                </button>
			</form>
		</div>
	</div>

<?php
//Footer
include_once '../includes/footer.php';
?>