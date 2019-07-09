<?php
require_once('inc/db.php');
if (isset($_POST['email']) && empty($_POST['email'])==false && isset($_POST['senha']) && empty($_POST['senha'])==false) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $img_usu = $_POST['img_usu'];

    $sql = "INSERT INTO usuario (nome, email,senha,img_usu) VALUES ('$nome','$email','$senha','$img_usu')";
  $pdo->query($sql);

  header("Location: ?pagina=login");
  
} 

?>




<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>

</head>
<body>
<h1 style="text-align: center;font-family: 'Fjalla One', sans-serif;
font-family: 'Bree Serif', serif;
height: 20px">Cadastro</h1><br />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="login-page">
  <div class="form">
    <form method="post" class="login-form">
      <input type="text" placeholder="nome"/ name="nome">
      <input type="email" placeholder="email"/ name="email">
      <input type="password" placeholder="senha"/ name="senha">
      URL da imagem:
      <input type="text" name="img_usu">
      <button>cadastrar</button>
      <p class="message">Já é registrado? <a href="?pagina=login">Entre agora mesmo!</a></p>
    </form>
  </div>
</div>



</form>


</body>
</html>