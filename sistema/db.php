<?php
$dsn="pgsql:dbname=tvwatch; host=localhost";
$dbuser="postgres";
$dbsenha="senha5";

	try {
		$pdo=new PDO ($dsn, $dbuser, $dbsenha);
	}catch (PDOException $e){
		echo "Falhou a conexão".$e->getMessage();
	} 	
?>