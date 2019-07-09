<?php
require_once('inc/db.php');

if (isset($_SESSION['id_user'])){
		$id_serie=$_GET['id_serie'];
		$id_user=$_GET['id_user'];


		$sql = "SELECT id_serie FROM perfil WHERE id_user='$id_user' AND id_serie = '$id_serie'";
		$pdo->query($sql);

	if ($sql->rowCount()>0 ){ 
		$sql = "INSERT INTO perfil (id_user, id_serie) VALUES ('$id_user', '$id_serie')"; 
		$pdo1->query($sql);

	header("Location: ?pagina=perfil"); 
}
     }
?>