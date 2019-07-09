<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Archivo+Black|Bree+Serif|Volkhov&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/listagem.css">



			<h1 style=" text-align: center;
			font-family: 'Bree Serif', serif;
			font-family: 'Alfa Slab One', cursive;
			font-family: 'Archivo Black', sans-serif;
			font-family: 'Volkhov', serif;
			height: 20px; font-size: 50px">Séries em destaque</h1>

 <div id="listagem_series">
<?php
require_once('inc/db.php');

session_start();

	
   $sql = "SELECT * FROM serie ORDER BY id_serie";
   $cont='0';
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0){
		foreach ($sql->fetchAll() as $serie) { ?>

			<div class="row">
				<div class="col"><h1>________________________________________________________</h1></div>
			</div>

			
			<ul>

    
  <div class="card-deck">
  	<div style="" class="card">
         <h2 style="text-align: center;font-family: 'Fjalla One', sans-serif;
           font-family: 'Bree Serif', serif;
           height: 20px; font-size: 40px" class="card-title"><?php echo $serie['nome']?></h2><br/>
          		<a href="?pagina=pagina_serie&id_serie=<?php echo $serie['id_serie']?>">
    	  			<img  class="card-img-top img-thumbnail" style="max-width: 416px; max-height: 490px; float: left" src="<?php echo $serie['img_capa']?>"></a>
 <div class="card-body">
      <a  style="margin-left: 130px" class="btn btn-danger btn-lg" href="?pagina=adiciona_serie&id_serie=<?php echo $serie['id_serie']?>">Curtir</a> 
 </div>
  </div>
	</div>
       </ul>
		 <?php } 
					} 
  
			?> </div><?
		else {
			header("Location: ?pagina=login.php");
			}

?>




