<?php

session_start();

$conexion = new PDO('sqlite:Favoritos.db');

$Usuario = $_SESSION['Usuario'];
$Contrasena =$_SESSION['Contrasena'];

$Titulo = $_GET['titulo'];
$Direccion = $_GET['direccion'];
$Categoria = $_GET['categoria'];
$Comentario = $_GET['comentario'];
$Valoracion = $_GET['valoracion'];


$consulta = "DELETE FROM favoritos WHERE Usuario='".$Usuario."'AND
Contrasena='".$Contrasena."' AND Titulo='".$Titulo."' AND Direccion='".$Direccion."' 
AND Categoria='".$Categoria."' AND Comentario='".$Comentario."' AND Valoracion='".$Valoracion."' 

";

$resultado = $conexion -> exec($consulta);

$conexion = NULL;

echo '

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php">
	</head>
</html>

';


?>