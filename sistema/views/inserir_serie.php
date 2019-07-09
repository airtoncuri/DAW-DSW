<?php
require_once('inc/db.php');

if (isset($_POST['nome']) && empty($_POST['nome']) == false){ 
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$img_capa = $_POST['img_capa'];

	$sql = "INSERT INTO serie (nome, descricao, img_capa) VALUES ('$nome', '$descricao', '$img_capa')"; 
	$pdo->query($sql);

	header("Location: ?pagina=series"); 
}
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?pagina=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?pagina=series">Séries</a></li>
    <li class="breadcrumb-item active" aria-current="page">Inserir série</li>
  </ol>
</nav>

<form method="POST">
	Nome: <br/>
	<input class="form-control" type="text" name="nome"><br/><br/>
	Descricao: <br/>
	<textarea class="form-control" id="textarea" name="descricao"></textarea><br/><br/>
	URL da imagem de capa: <br/>
	<input class="form-control" type="text" name="img_capa"><br/><br/>
	<input class="btn btn-primary" type="submit" value="Inserir">
</form>