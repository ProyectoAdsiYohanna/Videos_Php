<?php

session_start();

//Recupero variables
$Usuario = $_SESSION['Usuario'];
$Contrasena = $_SESSION['Contrasena'];

$Titulo = $_GET['Titulo'];
$Direccion = $_GET['Direccion'];
$Categoria = $_GET['Categoria'];
$Comentario = $_GET['Comentario'];
$Valoracion = $_GET['Valoracion'];

$conexion = new PDO('sqlite:Favoritos.db');

$consulta = "SELECT * FROM favoritos WHERE Usuario='".$Usuario."' AND 
Contrasena='".$Contrasena."' AND Categoria ='".$Categoria."' AND Comentario=
'".$Comentario."' AND Valoracion=".$Valoracion."";

$resultado = $conexion -> exec($consulta);

echo"
<table border=1 width=100%>
	<tr>
		<td>Titulo</td>
		<td>Direccion</td>
		<td>Categoria</td>
		<td>Comentario<td>
		<td>Valoracion</td>
		
	</tr>
";


foreach ($resultado as $row) {

echo "

<tr><form action='actualizarfavorito.php' method='POST'>
	<td><input type='text' name='Titulo' value='".$row['Titulo']."'></td>

	<td><input type='text'name='Direccion'value='".$row['Direccion']."'></td>

	<td>
	<select name='Categoria'>
		<option value='salud'>Salud</option>
		<option value='trabajo'>Trabajo</option>
		<option value='hobby'>Hobby</option>
		<option value='personal'>Personal</option>
		<option value='otros'>Otros</option>
		<option value='".$row['Categoria']."'selected>".$row['Categoria']."</option>
		</select> 
	</td>

	<td><input type='text' name= 'Comentario' value='".$row['Comentario']."'></td>

	<td><input type='text' name='Valoracion' value='".$row['Valoracion']."'></td>

	<td><input type='submit'></td>
	</form>

</tr>

";

}

echo "</table>";

$_SESSION['Titulo']= $Titulo;

$conexion=NULL;


?>