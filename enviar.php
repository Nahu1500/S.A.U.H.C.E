<?php
$nombre = $_POST['contact-name'];
$mail = $_POST['contact-email'];
$empresa = $_POST['contact-message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'brankoh@gmail.com';
$asunto = $_POST['contact-subject'];

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
