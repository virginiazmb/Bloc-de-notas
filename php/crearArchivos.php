<?php

$asunto= "../notas/". $_REQUEST['asunto'] . ".txt" ;
$contenido= $_REQUEST['contenido'];
$file=fopen($asunto, 'w+') or die("error al intentar crear el archivo");

fwrite($file, $contenido);

fclose($file);

$message = "Se guardó la nota exitosamete";

echo("<script>location.href = '../index.php?msg=$message';</script>");



?>