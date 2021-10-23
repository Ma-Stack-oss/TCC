<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "mvmcompany21@gmail.com";
$subjetc = "Contato - MVM ";
$body = "Nome:" .$nome. "/r/n".
        "Email:" .$email. "/r/n".
        "Mensagem:" .$mensagem;

$header = "From:matheuspereirasouza673@gmail.com"."/r/n"."Replay-To:".$email."/r/n"."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){
	echo("Email Enviado Com Sucesso!!!");
}else{
	echo("O Email não pode ser Enviado");
}

}
?>