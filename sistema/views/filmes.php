<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?pagina=home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Filmes</li>
  </ol>
</nav>

<a class="btn btn-primary" href="?pagina=inserir_filme">Novo filme</a>
<table border="0" width="130%">

<table class="table" id="filmes">
	<thead class="thead-dark">
	<tr>
		<th scope="col">Nome filme</th>
		<th scope="col">Descrição</th>
		<th scope="col">Ações</th>
	</tr>
</thead>
	
	<tbody>
	<?php
	require_once('inc/db.php');
	session_start();
	if (isset($_SESSION ['id_user']) && empty($_SESSION['id_user'])==false){
	$sql = "SELECT * FROM filme";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0){
		foreach ($sql->fetchAll() as $filme) {
			echo '<tr>';
			echo '<td>'.$filme['nome'].'</td>';
			echo '<td>'.$filme['descricao'].'</td>';
			echo '<td><a class="btn btn-primary" href="?pagina=editarFilme&id_filme='.$filme['id_filme'].'">Editar</a> - <a class="btn btn-primary" href="?pagina=excluirFilme&id_filme='.$filme['id_filme'].'">Excluir</a></td>';
			echo '</tr>';
		}
	}
} else {
	header("Location:?pagina=login");
}	
	?>
	</tbody>	
</table>