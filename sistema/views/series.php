<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?pagina=home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Séries</li>
  </ol>
</nav>


<a class="btn btn-primary" href="?pagina=inserir_serie">Nova série</a>
<table border="0" width="130%">

<table class="table table-hover table-striped" id="series">
	<thead class="thead-dark">
	<tr>
		<th scope="col">Nome série</th>
		<th scope="col">Descrição</th>
		<th scope="col">Ações</th>
	</tr>
</thead>
	
	<tbody>
	<?php
	require_once('inc/db.php');

	session_start();

	if (isset($_SESSION['id_user'])&& empty($_SESSION['id_user'])==false){
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
	$sql = "SELECT * FROM serie";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0){
		foreach ($sql->fetchAll() as $serie) {
			echo '<tr>';
			echo '<td>'.$serie['nome'].'</td>';
			echo '<td>'.$serie['descricao'].'</td>';
			echo '<td><a class="btn btn-primary" href="?pagina=editarSerie&id_serie='.$serie['id_serie'].'">Editar</a> - <a class="btn btn-primary" href="?pagina=excluirSerie&id_serie='.$serie['id_serie'].'">Excluir</a></td>';
			echo '</tr>';

		}
	}
   } else {
	header("Location: ?pagina=login");
}
	?>	
</tbody>
</table>