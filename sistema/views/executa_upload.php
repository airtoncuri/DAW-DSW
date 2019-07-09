<?php
require_once ('inc/db.php')
define('crud2/imagens'); 
$img = $_FILES["imagem"]["name"];
$img = str_replace('data:imagem/jpeg;base64,', '', $img); 
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . uniqid() . '.jpg';
$success = file_put_contents($file, $data);

/* pega a imagem na pasta tmp e grava a imagem no banco */
pg_query($db, "begin");
$oid = pg_lo_import($db, '_tmp/'.$data . '.jpg');
$sql1 = "insert into usuario (img_usu) values('$oid')";
$res1 = pg_query($db,$sql1) or die(pg_last_error($db));
pg_query($db, "commit");

/* elimina a imagem temporária */
unlink(UPLOAD_DIR . $id_user . '.jpg'); 

?>