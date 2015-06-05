<?php

class saluda{

	function saludo(){

		echo "Yo te saludo";

	}

	function adios(){

		echo "Yo te digo adios";
	}

}

$instancia = new saluda();

$ins= $instancia ->adios();


?>