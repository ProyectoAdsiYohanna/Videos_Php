<?php

$conexion =mysql_connect("localhost","video2brain","video2brain");

if(!$conexion){

die(mysql_error());


}

mysql_select_db("Agenda",$conexion);

$peticion = mysql_query("SELECT * FROM MiAgenda WHERE Nombre='Yohanna'");

while ($fila= mysql_fetch_array($peticion)) {
	echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
}	echo "<br>";

mysql_close($conexion);


?>