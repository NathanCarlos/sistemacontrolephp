<?php
session_start(); 
if(isset($_COOKIE['emailusuario']) && isset($_COOKIE['idusuario'])){
//Conexão
include_once 'php_action_clientes/db_connect.php';
//Header
include_once 'includes/header.php';
session_destroy();
}
else{
	Header('Location: index.php');
}
?>
	<div class="row center">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Módulos</h3>
			<table>
				<thead>
					<tr>
						<th>Clientes</th>
						<th>Produtos</th>
						<th>Financeiro</th>
						<th>Sair</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="clientes/clientes.php"><i class="medium material-icons">person_pin</i></a></td>
						<td><a href="produtos/produtos.php"><i class="medium material-icons">storage</i></td>
						<td><a href="financeiro/financeiro.php"><i class="medium material-icons">attach_money</i></td>
						<td><a href="sair.php"><i class="medium material-icons">exit_to_app</i></td>
					</tr>
				</tbody>
				<div class="row center">

					<h6>Olá, <?php echo $_COOKIE['nomeusuario'];?>.</h6>
				</div>
			</table>
			<br>
			
		</div>
	</div>

<?php
//Footer
include_once 'includes/footer.php';
?>