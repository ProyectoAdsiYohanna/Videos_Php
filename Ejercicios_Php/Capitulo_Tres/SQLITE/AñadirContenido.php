<?php

$conexion = new PDO('sqlite:bbliotecacd.db');


$consulta="INSERT INTO Discos VALUES('Queen','Queen',1973);
	INSERT INTO Discos VALUES('Queen','QueenII',1974);
	INSERT INTO Discos VALUES('Queen','Sher Heart Attack',1974);
	INSERT INTO Discos VALUES('Queen','A Night At The Opera',1975);


";

$resultado =$conexion-> exec($consulta);
$conexion = NULL;




?>