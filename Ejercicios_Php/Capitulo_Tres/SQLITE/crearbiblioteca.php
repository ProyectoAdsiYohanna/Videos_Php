<?php

$conexion = new PDO('sqlite:bibliotecacd.db');

$consulta=

"CREATE TABLE Discos(
	
	Artista char(20) NOT Null,
	Disco char (40),
	Anio Integer


);";

$data = $conexion->query($consulta);



?>