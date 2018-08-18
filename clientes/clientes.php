<?php
if(isset($_COOKIE['emailusuario']) && isset($_COOKIE['idusuario'])){
//Mensagem
include_once '../includes/mensagem.php';
//Conexão
include_once '../php_action_clientes/db_connect.php';
//Header
include_once '../includes/header.php';}
else{
    Header('Location: ../index.php');
}
?>
	<div class="row">
	    <div class="col s12 m6 push-m3">
			<h3 class="light">Clientes</h3>
			<table class="striped">
				<thead>
					<tr>
						<th>Nome </th>
						<th>Endereço </th>
						<th>Email </th>
						<th>Telefone</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT id, nome, endereco, email, telefone FROM clientes INNER JOIN usuarios ON id_usuario = id_usuariofk where id_usuario = $_COOKIE[idusuario]";
					$resultado = mysqli_query($connect,$sql);
					while($dados = mysqli_fetch_array($resultado)):
					?>
					<tr>
						<td><?php echo $dados['nome']?></td>
						<td><?php echo $dados['endereco']?></td>
						<td><?php echo $dados['email']?></td>
						<td><?php echo $dados['telefone']?></td>
						
						<td><a href="editar.php?id=<?php echo $dados['id']?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

						<td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

						<!-- Estrutura do Modal -->
						  <div id="modal<?php echo $dados['id'];?>" class="modal">
						    <div class="modal-content">
						      <h4>Opa!</h4>
						      <p>Tem certeza que deseja excluir esse cliente?</p>
						    </div>
						    <div class="modal-footer">
						      

						      <form action="../php_action_clientes/delete.php" method="POST">
						      	<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
						      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
						      	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
						      </form>
						    </div>
						  </div>
					</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
			<br>
			<a href="../menu.php" class="btn green"><i class="material-icons">arrow_back</i></a>
			<a class="waves-effect waves-light btn" href="adicionar.php">
			    <i class="material-icons left">add</i>Novo Cliente
			</a>
	</div>
</div>
<?php
//Footer
include_once '../includes/footer.php';
?>