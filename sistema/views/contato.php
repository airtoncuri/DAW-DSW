
<?php

//identificação para a chamada da classe

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;  

if (isset($_POST['enviar'])) 
{
  

// Inclui os arquivos PHPMailer.php e Exception.php e SMTP.php localizados na pasta PHPMailer/src

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/SMTP.php";

 

// resgatando os dados passados pelo form

$nome = $_POST['nome'];

$email = $_POST['email'];

$mensagem = $_POST['mensagem'];

$email_resposta = $_POST['email_resposta'];

// instanciando a classe
    $mail = new PHPMailer();  
  
//  opçao de idioma, setado como br 
    $mail->SetLanguage("br"); 

// habilitando SMTP 
    $mail->IsSMTP(); 

// enviando como HTML
    $mail->IsHTML(true); 
  
// Pode ser: 0 = não exibe erros, 1 = exibe erros e mensagens, 2 = apenas mensagens 
    $mail->SMTPDebug = 0;  
  
// habilitando autenticação 
    $mail->SMTPAuth = true;  
  
// habilitando tranferêcia segura (obrigatório) 
    $mail->SMTPSecure = 'tls'; 


// Configurações para utilização do SMTP do Gmail  

    $mail->Host = 'smtp.gmail.com';

    $mail->Port = 587; // Porta de envio de e-mails do Gmail

    $mail->Username = 'airtontestee@gmail.com';

    $mail->Password = 'Senhateste';

    $mail->CharSet = "utf-8";

// Remetente da mensagem

    $mail->SetFrom('airtontestee@gmail.com');
  
// Endereço de destino do email
    $mail->AddAddress($email); 
  
// Endereço para resposta
  
  $mail->addReplyTo($email_resposta);

// Assunto e Corpo do email

    $mail->Subject = "Recebemos seu email abaixo e estamos analisando. Obrigado pelas sugestões!";

    $mail->Body = $mensagem . "<br> E-mail SMTP enviado com sucesso para " . $email . " Enviado por: ".$email ;

// Enviando o email

    if(!$mail->Send())

    {

        $message = "PhpMailer Gmail status: " . $mail->ErrorInfo;

    } else {

        $message = "E-mail SMTP enviado com sucesso para " . $email . " Enviado por: ".$email_resposta ;


 }
 echo $message;

}
?>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?pagina=home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contato</li>
  </ol>
</nav>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">


<form method="POST" action="?pagina=contato">
	<label class="badge badge-secondary">Digite seu nome</label>
	<input type="text" name="nome" class="form-control">
	<br/>
	<label class="badge badge-secondary">Digite seu email</label>
  <input type="text" name="email" class="form-control">
    <br/>
  
	<div class="form-group shadow-textarea">
  <label class="badge badge-secondary">Contato:</label>
  <label for="textarea"></label>
  <textarea class="form-control z-depth-1" name="mensagem" rows="3" placeholder="Digite aqui..."></textarea>
</div>
 <br/>
	<input type="submit" name="enviar" value="ENVIAR" class="btn btn-primary">

</form>