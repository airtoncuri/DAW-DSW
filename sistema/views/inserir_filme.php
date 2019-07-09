<?php
require_once('inc/db.php');

if (isset($_POST['nome']) && empty($_POST['nome']) == false){ 
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];

	$sql = "INSERT INTO filme (nome, descricao) VALUES ('$nome', '$descricao')"; 
	$pdo->query($sql);

	header("Location: ?pagina=filmes"); 
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
	<input class="form-control" type="text" name="nome"><br/><br/>
	Descricao: <br/>
	<textarea class="form-control" id="textarea" name="descricao"></textarea><br/><br/>	<input class="btn btn-primary" type="submit" value="Inserir">
</form>