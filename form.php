<?php

$nombreAlumno = $_POST ['name'];
$edad = $_POST ['age'];
$nombreTutor = $_POST ['full-name'];
$telefono = $_POST ['phone'];
$email = $_POST {'email'};

$mensaje = "Este mensaje fue enviado por " . $nombreTutor . ",\r\n";
$mensaje .= "Está interesado en inscribir a " . $nombreAlumno . ",\r\n";
$mensaje .= "Quien tiene una edad de " . $edad . ",\r\n";
$mensaje .= "El teléfono de contacto es" . $telefono . ",\r\n";
$mensaje .= "y el email es " . $email . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$destinatario = 'florvasiliauskas@gmail.com';
$asunto = 'Solicitud de información';

mail ($destinatario, $asunto, utf8_decode($mensaje), $header);
header ('Location:exito.html');

?>