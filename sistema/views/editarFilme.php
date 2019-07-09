<?php
require_once('inc/db.php');
?>

<?php

$id_filme = 0;

	if (isset($_GET ['id_filme']) && empty($_GET['id_filme']) == false){
		$id_filme = $_GET['id_filme'];

}
	if (isset($_POST['nome']) && empty($_POST['nome']) == false){
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];

		$sql = "UPDATE filme SET nome='$nome',descricao='$descricao'WHERE id_filme='$id_filme'";
		$pdo->query($sql);

		header("Location: ?pagina=home");;
} 

	$sql = "SELECT * FROM filme WHERE id_filme= '$id_filme'";
		$sql = $pdo->query($sql );
		if ($sql->rowCount()>0){
			$dado = $sql->fetch();

	} else {
		header("Location:?pagina=editarFilme");
	}


?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?pagina=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?pagina=filmes">Filmes</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar filme</li>
  </ol>
</nav>

<form method="POST">
	Nome: <br/>
	<input class="form-control" type="text" name="nome"  value="<?php echo $dado['nome'];?>"><br/><br/>
	Descricao: <br/>
	<textarea class="form-control" type="text" name="descricao" value="<?php echo $dado['descricao'];?>"></textarea><br/><br/>
<input class="btn btn-primary" type="submit" value="Atualizar">
</form>

</html>




