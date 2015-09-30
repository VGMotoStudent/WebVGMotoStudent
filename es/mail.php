<?php

$para      = 'motostudent.vitoria@gmail.com';
$desde     = $_POST['email'];
$nombre    = $_POST['nombre'];
$titulo    = 'Consulta de: ' . $nombre;
$mensaje   = $_POST['asunto'];
$cabeceras = 'From: ' . $desde . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

header('Location: /index.html');

?>