<?php

$conexion=mysql_connect("localhost","video2brain","video2brain");

if (!$conexion) {

	die('No he podido conectar:'.mysql_error());

}


if (mysql_query("CREATE DATABASE Agenda ",$conexion)) {

echo "Se ha creado la base de datos ";

}else{

	echo "No se ha podido crear la base de datos por el siguiente error".mysql_error();
}


//Preparo esta peticion 

mysql_select_db("Agenda",$conexion);
$sql="CREATE TABLE MiAgenda
(
	personaID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(personaID),
	Nombre varchar(15),
	Apellido varchar(15),
	Edad int,
	Telefono int

)";

//Ejecuto la peticion

mysql_query($sql,$conexion);


//Cerrar la conexion
mysql_close($conexion);

?>