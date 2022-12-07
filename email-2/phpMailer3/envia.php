<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'libmail/vendor/autoload.php';

$mail = new PHPMailer(true);

$name = $_POST['name'];
$assunto = $_POST['assunto'];

try {
    $mail->CharSet = 'UTF-8';
                         
    $mail->isSMTP(); 
    $mail->Host       = 'smtp-vip.uni5.net';  
    $mail->SMTPAuth   = true;   
    $mail->Username   = 'alunos@tido.com.br'; 
    $mail->Password   = 'alunos22@test'; 
    $mail->SMTPSecure = "TLS";
    $mail->Port       = 587; 
    $mail->setFrom('alunos@tido.com.br', 'Mailer');
    $mail->addAddress('alunos@tido.com.br', 'Tido Ferraz'); 

    $mail->isHTML(true);                                 
    $mail->Subject = "$assunto";
    $mail->Body    = "Olá, <b> $name !</b>";
    $mail->AltBody = "Olá, $name ";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}