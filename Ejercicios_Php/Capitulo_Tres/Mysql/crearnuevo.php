<?php

$conexion=mysql_connect("localhost","video2brain","video2brain");

if (!$conexion) {
		
	die("No se ha podido conectar por la siguiente razon :".mysql_error());

}

mysql_select_db("Agenda",$conexion);

mysql_query("INSERT INTO MiAgenda(Nombre,Apellido,Edad,Telefono)
VALUES ('Sergio','Gomez',22,'3112365610')");


mysql_close($conexion);



?>