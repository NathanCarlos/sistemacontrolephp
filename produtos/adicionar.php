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
			<h3 class="light">Novo Produto</h3>
			<form action="../php_action_produtos/create.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="codigobarras" id="codigobarras" maxlength="13">
					<label for="codigobarras">Código de Barras</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao" maxlength="255">
					<label for="descricao">Descrição do Produto</label>
				</div>
				<div class="input-field col s12">
					<input type="number" name="valorproduto" id="valor-produto" step="0.01">
					<label for="valor-produto">Valor do Produto</label>
				</div>
				<div class="input-field col s12">
					<input type="number" name="quantidade" id="quantidade" step="0.01">
					<label for="quantidade">Quantidade de Produtos em Estoque</label>
				</div>
				<a href="produtos.php" class="btn green"><i class="material-icons">arrow_back</i></a>
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