<?php
mb_internal_encoding("UTF-8");

$to = 'frankrsouza@gmail.com';
$subject = 'Formulário Atto';

$body = "";
$name = "";
$email = "";
$whatsapp = "";

if( isset($_POST['name']) ){
    $name = $_POST['name'];
    //echo $name;

    $body .= "Name: ";
    $body .= $name;
    $body .= "\n\n";
}
if( isset($_POST['email']) ){
    $email = $_POST['email'];
    //echo $email;

    $body .= "";
    $body .= "Email: ";
    $body .= $email;
    $body .= "\n\n";
}
if( isset($_POST['whatsapp']) ){
    $whatsapp = $_POST['whatsapp'];
    //echo $whatsapp;

    $body .= "";
    $body .= "Whatsapp: ";
    $body .= $whatsapp;
    $body .= "\n\n";
}

$headers = 'From: ' .$email . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    mb_send_mail($to, $subject, $body, $headers);
    echo '<span style="color: #78dd81;">Mensagem enviada com sucesso!</span>';
}
else{
    echo '<span style="color: #ffc4c4;">Houve um erro ao enviar a mensagem.</span>';
}