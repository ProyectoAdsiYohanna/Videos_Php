<?php

echo "<table border=1><tr><td>Artista</td><td>Disco</td><td>Año</td></tr>";


$conexion = new PDO('sqlite:bibliotecacd.db');

$consulta =$conexion->query("SELECT * FROM Discos WHERE Artista='Queenn' ORDER BY Anio DESC");



foreach ($consulta as $row) {

echo "<tr><td>".$row ['Artista']."</td><td>".$row['Disco']."</td><td>".$row['Anio']."</td></tr>";

}


$conexion = NULL;



?>