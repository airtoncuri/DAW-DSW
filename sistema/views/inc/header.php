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

      <link rel="stylesheet" type="text/css" href="css/style.css">
		

</head>
<body>
	<header>
		<div class="container">
		<?php if(isset($_SESSION['id_user'])){?>
		<a href="?pagina=home">
			<?php } ?>
			<img src="img/logo.png" title="Logo" alt="Logo"></a>

		<div id="menu">
			<a href="?pagina=series">Séries</a>
			<a href="?pagina=filmes">Filmes</a>
			<a href="?pagina=contato">Contato</a>
<?php if (!isset($_SESSION['id_user'])){?>
			<a href="?pagina=cadastrar">Cadastrar</a>
			<a href="?pagina=login">Login</a>

<?php } ?>
		<?php if(isset($_SESSION['id_user'])){?>	
			<a href="?pagina=logout">Sair</a>
		<?php } ?>
	</div>	
	</header>

	<div id="conteudo" class="container">
		
	 

</body>
</html>