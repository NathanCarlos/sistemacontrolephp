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
			<h3 class="light">Novo Lançamento</h3>
			<form action="../php_action_financeiro/create.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao" maxlength="255">
					<label for="descricao">Descrição do Lançamento</label>
				</div>
				<div class="input-field col s12">
					<input type="number" name="valor" id="valor" step="0.01">
					<label for="valor">Valor do Lançamento</label>
				</div>
				<a href="financeiro.php" class="btn green"><i class="material-icons">arrow_back</i></a>
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