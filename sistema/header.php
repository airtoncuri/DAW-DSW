<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TvWatch</title>
	<meta charset="utf-8">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

	  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fjalla+One&display=swap" rel="stylesheet">
	  
      <link rel="stylesheet" type="text/css" href="css/style.css">		
</head>
	<body>
		<header>
			<div class="container">
			
					<?php if(isset($_SESSION['id_user'])){ ?>
					<a href="?pagina=home">
					<img src="img/logo.png" title="Logo" alt="Logo"></a>
					<?php } else { 
					?><img src="img/logo.png" title="Logo" alt="Logo"><?php
					} ?> 
		    <div id="menu">
				<div class="btn-group">
			  		<button type="button" class="btn btn-success"><?php if(isset($_SESSION['id_user'])){?>	
			<div id="nomee">
					<?php
					?> <img  class="card-img-top rounded-circle" style="background-color: #ddd; border-radius: 100%; height: 40px; object-fit: cover; width: 40px;"src="<?php echo $_SESSION['img_usu']?>">				
                    <?php echo  $_SESSION['nome'];
			        ?>
				    <?php } else if (isset ($_SESSION['admin'])==1) {
				    echo $_SESSION['nome'];
				    }  else  {
				    echo 'Desconectado';

		            }?></button></div>
					<button type="button" class="btn btn-success btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
			   	    <span class="sr-only">Dropdown</span>
			 	    </button>
		    <div class="dropdown-menu">
			  		<?php if (!isset($_SESSION['id_user'])){?>
					<a class="dropdown-item" href="?pagina=login">Login</a>
					<a class="dropdown-item" href="?pagina=cadastrar">Cadastrar</a>
					    <?php } ?>
						<?php if(isset($_SESSION['id_user'])){?>	
						<a class="dropdown-item" href="?pagina=perfil&id_user=<?php echo $usuario['id_user']?>">Meu perfil</a>
					<?php } ?>
						<?php 
						if (isset($_SESSION['admin']) && $_SESSION['admin']==1){?>
						<a class="dropdown-item" href="?pagina=series">Séries</a>
						<a class="dropdown-item" href="?pagina=filmes">Filmes</a>
					<?php }?>
						<a class="dropdown-item" href="?pagina=contato">Contato</a>

					<?php if(isset($_SESSION['id_user'])){?>	
										<a class="dropdown-item" href="?pagina=logout">Sair</a>
									<?php }   ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</div>	
</header>

<div id="conteudo" class="container">
		
	 

</body>
</html>
