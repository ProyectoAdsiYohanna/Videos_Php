<?php

//Crear una tabla de favoritos_______________________________

//conexion
$conexion = new PDO('sqlite:Favoritos.db');

//Crear tabla
$consulta = 

"CREATE TABLE favoritos(
	
	Usuario char(40) NOT NULL,
	Contrasena char (40) NOT NULL,
	Titulo char (40) NOT NULL,
	Direccion char (100) NOT NULL,
	Categoria char (40),
	Comentario char (200),
	Valoracion int


);";

//insertar contenido  en la tabla
$resultado = $conexion-> exec($consulta);


//Cerrar la conexion
$conexion = NULL;

//CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS_____________

//Establecer 

$conexion = new PDO('sqlite:Favoritos.db');

//Preparar

$consulta =
"INSERT INTO favoritos VALUES ('Yohanna','Yohanna','Google','https://www.google.com.co/','Tecnologia','Este es un buscador',10);
INSERT INTO favoritos VALUES ('Yohanna','Yohanna','Youtube','https://www.youtube.com.co/','Tecnologia','Sitio Web para ver y subir videos',10);

";


//Insertar
 $resultado = $conexion -> exec($consulta);

//Cerrar
$conexion =NULL;

//Crear una tabla de usuarios____________________________

//Conexion
$conexion = new PDO('sqlite:Favoritos.db');

//Crear Tabla

$consulta=
"CREATE TABLE Usuarios (
usuario char (40) Not Null,
contrasena char (40) Not Null,
nombre char (40) Not Null,
apellido char (100) Not Null,
edad char (40),
permisos int

);";

//Insertar contenido en la tabla
$resultado = $conexion -> exec($consulta);
//Cerrar la conexion
$conexion= Null;

//CONTENIDO DE PRUEBA PARA LA TABLA DE Usuarios_____________

//Establecer 
$conexion = new PDO('sqlite:Favoritos.db');
//Preparar
$consulta =
"INSERT INTO Usuarios VALUES ('Yohanna','Yohanna','Sandra Yohanna','Chaparro Gomez',20,1);
";

//Insertar
 $resultado = $conexion -> exec($consulta);
//Cerrar
$conexion =NULL;


//Crear una tabla de logs________________________________

//Conexion
$conexion = new PDO('sqlite:Favoritos.db');

//Crear Tabla
$consulta=

'CREATE TABLE lOGS (

utc int,
anio int ,
mes char (40),
dia char (100),
hora char (40),
minuto int,
segundo int, 
ip char (50), 
navegador char (100),
usuario char (40),
contrasena char (40)

);';

//Insertar Contenido en la tabla
$resultado = $conexion -> exec($consulta);
//Cerrar la conexion
$conexion = NULL;


//CONTENIDO DE PRUEBA PARA LA TABLA DE LOGS_____________

//Establecer 

$conexion = new PDO('sqlite:Favoritos.db');

//Preparar

$consulta =
"INSERT INTO LOGS VALUES (000000000,2015,06,03,21,03,00, '127.0.0.1','chrome','Yohanna','Yohanna');
";

//Insertar
 $resultado = $conexion -> exec($consulta);

//Cerrar
$conexion =NULL;




?>