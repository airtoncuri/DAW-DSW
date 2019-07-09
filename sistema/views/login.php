<?php
require_once('inc/db.php');

if (isset($_POST['email']) && empty($_POST['email'])==false AND isset($_POST['senha']) && empty($_POST['senha'])==false){
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  

  $dsn = "pgsql:dbname=tvwatch; host=localhost";
  $dbuser = "postgres";
  $dbpass = "senha5";

  try {
    $db=new PDO($dsn, $dbuser, $dbpass);

    $sql = $db->query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");
    if ($sql->rowCount() > 0) {
      $dado = $sql -> fetch();
      $_SESSION ['nome'] = $dado ['nome'];
      $_SESSION ['id_user']= $dado['id_user'];
      $_SESSION ['admin'] = $dado['admin'];
      $_SESSION ['email'] = $dado['email'];
      $_SESSION['img_usu']=$dado['img_usu'];

      header("Location: ?pagina=home");
      } else {
        ?>
          <div class="alert alert-danger" role="alert">
            Usuário e/ou senha inválidos.
          </div>
 <?php } 
      

  } catch (PDOException $e){
    echo "Falhou: ".$e->getMessage();
  }
}


?>

<h1 style="text-align: center;font-family: 'Fjalla One', sans-serif;
font-family: 'Bree Serif', serif;
height: 20px">Login</h1><br />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="login-page">
  <div class="form">
    <form method="post" class="login-form">
      <input type="email" placeholder="email"/ name="email">
      <input type="password" placeholder="senha"/ name="senha">
      <button>login</button>
      <p class="message">Não é registrado? <a href="?pagina=cadastrar">Crie uma conta!</a></p>
    </form>
  </div>
</div>



  
