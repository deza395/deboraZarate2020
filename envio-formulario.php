<?php
// llamo a loa nombres

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

// datos para el correro
$destinatario='deza395@gmail.com';
$asunto="contacto desde web mika-apart";


$carta="Tu Nombre es: ".$nombre."\r\n";
$carta.="Tu Email es: ".$email."\r\n";
$carta.="telefono: ".$telefono."\r\n";
$carta.="Consulta: ".$mensaje."\r\n";

$remitente="from debo@gmail.com";

mail($destinatario, $asunto, $carta, $remitente);
// enviando mensaje



// pop up de que esta todo ok
header("Location:index.php?i=ok");
 ?>
