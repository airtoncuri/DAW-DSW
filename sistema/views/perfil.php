
<?php
 require_once ('inc/db.php');
 	$id_user = (int) $_GET['id_user']; //cast

 echo 'Seja bem-vindo '. $_SESSION['nome'];	
    	?><img  class="card-img-top" style="background-color: #ddd; border-radius: 100%; height: 140px; object-fit: cover; width: 140px; float: left;" src="<?php echo $_SESSION['img_usu']?>">

?>

    
 
	


