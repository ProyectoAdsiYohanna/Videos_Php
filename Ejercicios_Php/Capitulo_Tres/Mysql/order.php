<?php

$conexion =mysql_connect("localhost","video2brain","video2brain");

if (!$conexion) {
	
	die(mysql_error());
}

mysql_select_db("Agenda",$conexion);

$peticion = mysql_query("SELECT *FROM MiAgenda ORDER BY Edad ASC");

while($fila=mysql_fetch_array($peticion)){
	echo $fila['Nombre'];
	echo " ";
	echo $fila['Apellido'];
	echo " ";
	echo $fila['Edad'];
	echo " ";
	echo $fila['Telefono'];
	echo "<br>";


}


mysql_close($conexion);
?>