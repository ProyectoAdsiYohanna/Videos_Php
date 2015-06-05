<?php


$conexion =mysql_connect("localhost","video2brain","video2brain");


mysql_select_db("Agenda",$conexion);

mysql_query("DELETE FROM MiAgenda WHERE Nombre='Yesid' AND Apellido ='Gomez'");

mysql_close($conexion);




?>