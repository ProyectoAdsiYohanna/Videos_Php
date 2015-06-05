<?php

$conexion=mysql_connect("localhost","video2brain","video2brain");


mysql_select_db("Agenda",$conexion);

mysql_query("UPDATE MiAgenda SET Edad ='26' WHERE Nombre='Sergio'AND Apellido ='Gomez'");

mysql_close($conexion);

?>