<?php

$variable="Hola Yohanna";

function hola(){
	global $variable;
	echo $variable;

}

hola();

?>