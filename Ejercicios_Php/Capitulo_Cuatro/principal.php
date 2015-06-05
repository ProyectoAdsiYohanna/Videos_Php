<?php

session_start();

echo "Tu  usuario es :".$_SESSION['Usuario']."<br/> Tu contraseña es: ".$_SESSION['Contrasena'];

//Crear conexion
$conexion = new PDO('sqlite:Favoritos.db');

//Establecer una consulta
$consulta =

"SELECT  * FROM favoritos WHERE Usuario='Yohanna' AND Contrasena='Yohanna';";


//Ejecutar la consulta
$resultado = $conexion ->query($consulta);

//Imprimir Consulta

echo" <table border=1 width=90%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td></td>
<td></td>
</tr>
";


foreach ($resultado as $row) {

echo "<tr><td>".$row['Titulo']."</td><td>".$row['Direccion']."</td><td>".$row['Categoria']."</td><td>".$row['Comentario']."</td><td>".$row['Valoracion']
."</td><td><a href='eliminarfavorito.php?titulo=".$row['Titulo']."&direccion=".$row['Direccion']."&categoria=".$row['Categoria']."&comentario=".$row['Comentario']."&valoracion=".$row['Valoracion']."'>Eliminar</a></td><td><a href='formularioactualizar.php?titulo=".$row['Titulo']."&direccion=".$row['Direccion']."&categoria=".$row['Categoria']."&comentario=".$row['Comentario']."&valoracion=".$row['Valoracion']."'>Actualizar</a></td></tr>";

}

//Añadir un registro

echo "

<tr>
	<form action='crearfavorito.php' method='POST'>
	<td><input type='text' name='Titulo'></td>
	<td><input type='text' name='Direccion'></td>
	<td><select name='Categoria'>
		<option value='salud'>salud</option>
		<option value ='trabajo'>trabajo</option>
		<option value ='hobby'>hobby </option>
		<option value ='personal'>personal</option>
		<option value ='otros'>otros</option>
	</td>
	<td><input type='text' name='Comentario'></td>
	<td><input type='text' name='Valoracion'></td>
	<td><input type='submit'></td>


</tr>

";

echo "</table>";

//Cerramos la conexion

$conexion =Null;


?>