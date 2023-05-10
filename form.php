<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['abstract'];

echo $nombre . " " . $mail . " " . $mensaje;

$header = 'From: ' . $mail . " \r\n";
$header .= 'X-Mailer:PHP/' . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensajeMail = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensajeMail .= "Su e-mail es: " . $mail . " \r\n";
$mensajeMail .= "Mensaje: " . $_POST['abstract'] . " \r\n";
$mensajeMail .= "Enviado el " . date('d/m/Y', time());

$para = $mail;
$asunto = 'Este mail fue enviado desde la web';

mail($para, $asunto, utf8_decode($mensajeMail), $header);

header('Location:exito.html');

?>