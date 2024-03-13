<?php

$destino = "ab-engineer@ab-engineer.com.co";
//Esto es al correo que se enviarÃ¡ el mensaje

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];



if ($_REQUEST['Problema'] == 'Pagina' ){
    $problema = "Pagina Web";
}else if ($_REQUEST['Problema'] == 'Terminos' ){
    $problema = "Documentacion";
}else if ($_REQUEST['Problema'] == 'Servicios' ){
    $problema = "Servicios";
}else if ($_REQUEST['Problema'] == 'Correos' ){
    $problema = "Correos";
}else if ($_REQUEST['Problema'] == 'Hosting' ){
    $problema = "Hsoting";
}else if ($_REQUEST['Problema'] == 'SSL' ){
    $problema = "Certificados SSL";
}else if ($_REQUEST['Problema'] == 'Mantenimiento' ){
    $problema = "Mantenimiento";
}

$mensajeCompleto = "Soporte de NewSpace | Soporte";
$header = "\n" . "Nombres: " . $nombre . "\n" . "Correo: " . $email . "\n" . "Telefono: " . $telefono . "\n" . "\n" . "Mensaje: " . "\n" . $mensaje . "\n" . "\n" . "Tipo de Problema: " . $problema . "\n" . "Este correo fue enviado desde el sistema de formularios de Soporte - Soporte de AB-engineer.com.co.";

mail($destino, $mensajeCompleto, $header,);
header('Location: mensaje-de-soporte.html');
?>

