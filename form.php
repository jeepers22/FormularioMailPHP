<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['abstract'];

$mensajeMail = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensajeMail .= "Su e-mail es: " . $mail . " \r\n";
$mensajeMail .= "Mensaje: " . $mensaje . " \r\n";
$mensajeMail .= "Enviado el " . date('d/m/Y', time());

$para = 'maxizero@gmail.com';
$asunto = 'Este mail fue enviado desde la web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:exito.html');

?>