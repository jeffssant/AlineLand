<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$data = $_POST['data'];
$estado = $_POST['estado'];
$instituicao = $_POST['instituicao'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$body = "<b>Nome</b>: $nome <br>
        <b>Assunto</b>: $assunto <br>
        <b>Telefone:</b> $telefone <br>
        <b>Email: </b>$email <br>
        <b>Data:* </b>$data <br>
        <b>Estado: </b>$estado<br>
        <b>Instituiçãp: </b>$instituicao <br><br>
        <b>Mensagem: </b>$mensagem
        ";

require("./assets/Mailer/PHPMailer.php");
require("./assets/Mailer/SMTP.php");
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->CharSet = 'UTF-8';
 $mail->Encoding = 'base64';
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "";
 $mail->Password = "";
 $mail->SetFrom("");
 $mail->Subject = "Contato atrvés do site - " .$assunto." - ".$nome  ;
 $mail->Body = $body ;
 $mail->AddAddress("");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
       echo "Mensagem enviada com sucesso!";
       exit();
    }

?>

