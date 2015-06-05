<?php

$conexion = new PDO('sqlite:bibliotecacd.db');

$consulta = "UPDATE Discos SET Artista='Queenn' WHERE Artista ='Queen'";


$resultado = $conexion->exec($consulta);

$conexion = NULL;


 


?>

