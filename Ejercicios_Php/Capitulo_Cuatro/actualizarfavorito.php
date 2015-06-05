<?php

session_start();


$conexion = new PDO ('sqlite:Favoritos.db');

$Usuario = $_SESSION['Usuario'];
$Contrasena = $_SESSION['Contrasena'];

$Titulo = $_POST['Titulo'];
$Direaccion = $_POST['Direccion'];
$Categoria = $_POST['Categoria'];
$Comentario = $_POST['Comentario'];
$Valoracion = $_POST['Valoracion'];


$tituloantiguo = "UPDATE favoritos SET Titulo='".$Titulo."',Direccion='".$Direccion."',
Categoria='".$Categoria."',Comentario='".$Comentario."',Valoracion='".$Valoracion."' WHERE titulo ='".$tituloantiguo."'";


$resultado = $conexion -> exec($consulta);

$conexion = NULL;

echo'
<html>
	<head>
		<meta http-equiv="REFRESH" content=0;url=principal.php">
	</head>
</html>

';





?>