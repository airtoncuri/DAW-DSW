
<?php
 require_once ('inc/db.php');
 	$id_serie = (int) $_GET['id_serie']; //cast

if (isset($_SESSION['id_user'])&& empty($_SESSION['id_user'])==false){
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
$sql = 'SELECT * FROM serie WHERE id_serie = '.$id_serie;
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0){
		foreach ($sql->fetchAll() as $serie) {
			?>
			<ul>

  <div class="card-group">
  <div class="card">
		<h2 style="text-align: center;font-family: 'Fjalla One', sans-serif;
		font-family: 'Bree Serif', serif;
		height: 20px; font-size: 40px" class="card-title"><?php echo $serie['nome']?></h2><br/>
  	 	<img class="card-img-top img-thumbnail rounded-circle" style="
    background-color: #ddd; border-radius: 100%; height: 240px; object-fit: cover; width: 240px; margin: 0 auto; " src="<?php echo $serie['img_capa']?>">
    
  <div class="row">
  <div class="col"><h1>___________________________________________________</h1></div>
			</div>
        <h5 style="margin:20px;" class="card-title"><?php echo $serie['descricao']?></h5>

   
   <div class="card-body">
      <a class="btn btn-danger btn-lg btn-block" href="?pagina=adiciona_serie&id_serie=<?php echo $serie['id_serie']?>">Curtir</a> 
   </div>

  </div>
			</div></ul>
		 <?php } 
	} 
		}
	
   ?>
 
 
	


