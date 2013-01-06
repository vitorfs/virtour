<?php 
  $activeMenu = "clientes";
?>

<?php include("shared/top.php") ?>
	<ul class="breadcrumb">
		<li class="active">Clientes</li>
	</ul>
	<a href="adicionar-cliente.php" class="btn pull-right" style="margin-bottom:20px">Adicionar</a>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Status</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Nome do Cliente</td>
				<td>Ativo</td>
				<td></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Nome do Cliente</td>
				<td>Ativo</td>
				<td></td>
			</tr>			
		</tbody>
	</table>
<?php include("shared/bottom.php") ?>