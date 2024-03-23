<?php

$nombre = $_POST['nombre'];
$consulta = $_POST['consulta'];
$correo = $_POST['correo'];
$acepto = $_POST['acepto'];

$formcontent="
    Nombre: $nombre \n
    Consulta: $consulta \n
    E-mail: $correo \n
    Acepta términos y condiciones?: $acepto
";

$recipient = "martinolucatomas@gmail.com, $correo";

$subject = "Raices y Armonía - Consulta vía web de $nombre";

$header = "From: $correo \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: contacto.html");

?>