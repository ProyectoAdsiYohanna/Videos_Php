<?php

class saluda{

	function saludo(){

		echo "Yo te saludo";

	}

	function adios(){

		echo "Yo te digo adios";
	}

}

class subsaluda extends saluda{

	var $atributo;
	function Holados(){}
}

$instancia = new subsaluda();

$ins= $instancia ->adios();