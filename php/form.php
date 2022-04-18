<?
$nombre = $_post['nombre'];
$mail = $_post['email'];
$mensaje = $_post['textarea'];


$para = 'jonacau12@gmail.com';
$asunto = 'Este mail fue enviado desde la web';

mail($para, $asunto,  utf8_decode($nombre, $mail, $mensaje));

header('Location:../Pages/exito.html');

?>