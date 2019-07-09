<?php
require_once('inc/db.php');
if (isset($_GET ['id_serie']) && empty($_GET['id_serie']) == false){
	$id_serie = $_GET['id_serie'];

	$sql = "DELETE FROM serie WHERE id_serie='$id_serie'"; 
	$pdo->query($sql);
	header("Location: ?pagina=series");

} 

else {
	header("Location: ?pagina=series");
}


?>