<?php
//con esta funcion preparo una tabla para multiplicar 
function MiTabla($numero){

	for($multiplicador=0; $multiplicador<=10;$multiplicador++){

		echo $numero."x".$multiplicador."=".$numero*$multiplicador."<br>";

	}


}

//Con este for calculo todas las tablas de multiplicar

for ($segnumero=0; $segnumero<=10; $segnumero++){
	echo "Tabla del ".$segnumero.":<br>";



MiTabla ($segnumero);

}




?>
