<?php
require_once('inc/db.php');

$id_serie = 0;

	if (isset($_GET ['id_serie']) && empty($_GET['id_serie']) == false){
		$id_serie = $_GET['id_serie'];

}
	if (isset($_POST['nome']) && empty($_POST['nome']) == false){
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];

		$sql = "UPDATE serie SET nome='$nome',descricao='$descricao'WHERE id_serie='$id_serie'";
		$pdo->query($sql);

		header("Location: ?pagina=home");;
} 

	$sql = "SELECT * FROM serie WHERE id_serie= '$id_serie'";
		$sql = $pdo->query($sql );
		if ($sql->rowCount()>0){
			$dado = $sql->fetch();

	} else {
		header("Location:?pagina=editarSerie");
	}


?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?pagina=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?pagina=series">Séries</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar série</li>
  </ol>
</nav>

<form method="POST">
	Nome: <br/>
	<input class="form-control" type="text" name="nome"  value="<?php echo $dado['nome'];?>"><br/><br/>
	Descricao: <br/>
	<input class="form-control" type="text" name="descricao" value="<?php echo $dado['descricao'];?>"><br/><br/>
	URL da imagem de capa: <br/>
     <input type="text" step="0.010" name="img_capa" value="<?php echo $arr['img_capa']; ?>">
        <br><br>  <input class="btn btn-primary" type="submit" value="Atualizar">
</form>

</html>

