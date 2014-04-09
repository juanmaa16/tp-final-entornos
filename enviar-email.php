<?php

$nombreApellido = $_POST['nombre_apellido'];
$email = $_POST['email'];
$consulta = $_POST['consulta'];

$to = 'juanmaortyz@gmail.com';

$subject = 'Consulta desde web Donde estudiar Rosario?';

$headers = 'From: ' . $nombreApellido . ' <' . $email . '> ' . "\r\n" . 'Reply-To: ' . $email;

$envioMail = mail($to, $subject, $consulta, $headers);

if ($envioMail) {
    header('Location:contacto-enviado.html');
}
?>