<?php

$destino = "ab-engineer@ab-engineer.com.co";
//correo que se enviara el mensaje

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];



$mensajeCompleto = "Enviado desde formulario de AB-Engineer.com.co | Formulario de contacto";
$header = "\n" . "Nombre: " . $nombre . "\n" . "Correo: " . $email . "\n" . "Telefono: " . $telefono . "\n" . "\n" . "Mensaje: " . "\n" . $mensaje . "\n" . "\n" . "Este correo fue enviado desde el sistema de formularios de contacto - Contacto de AB-Engineer.com.co.";

mail($destino, $mensajeCompleto, $header,);
header('Location: mensaje-de-contacto.html');
?>

