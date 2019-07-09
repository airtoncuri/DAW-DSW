<?php
require_once('inc/db.php');

if (isset($_GET ['id_filme']) && empty($_GET['id_filme']) == false){
	$id_filme = $_GET['id_filme'];

	$sql = "DELETE FROM filme WHERE id_filme='$id_filme'"; 
	$pdo->query($sql);

		header("Location: ?pagina=filmes");
}

else {
		header("Location: ?pagina=filmes");
}
?>