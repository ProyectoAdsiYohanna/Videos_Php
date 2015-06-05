<?php

session_start();


//Crear Variables

$usuario = $_SESSION['Usuario'];
$contrasena =$_SESSION['Contrasena'];
$addtitulo = $_POST['Titulo'];
$adddireccion = $_POST['Direccion'];
$addcategoria = $_POST['Categoria'];
$addcomentario = $_POST['Comentario'];
$addvaloracion = $_POST['Valoracion'];

//Conexionn 

$conexion = new PDO('sqlite:Favoritos.db');

//Consulta

$consulta =
"INSERT INTO favoritos VALUES('$usuario','$contrasena',
	'$addtitulo','$adddireccion',
	'$addcategoria','$addcomentario','$addvaloracion');
";

//Ejecuto la consulta
$resultado = $conexion -> exec($consulta);

//Cierro la conexion
$conexion = Null;


echo "
<html>
	<head>
		<meta http-equiv='REFRESH' content='0;url=principal.php'>
	</head>
</html>

";




?>