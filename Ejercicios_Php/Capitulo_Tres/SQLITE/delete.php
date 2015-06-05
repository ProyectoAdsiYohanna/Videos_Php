<?php

$conexion = new PDO('sqlite:bibliotecacd.db');

$consulta = "DELETE FROM  Discos WHERE Anio=1975";


$resultado = $conexion->exec($consulta);

$conexion = NULL;


 


?>
