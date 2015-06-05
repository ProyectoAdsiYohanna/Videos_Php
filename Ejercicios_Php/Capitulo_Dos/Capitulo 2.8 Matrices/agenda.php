<?php

$agenda[0]['nombre'] ="Yohanna";
$agenda[0]['telefono']="3123245678";
$agenda[0]['email']="yoha@hotmail.com";

$agenda[1]['nombre'] ="Johan";
$agenda[1]['telefono']="311245678";
$agenda[1]['email']="jha@hotmail.com";

$agenda[2]['nombre'] ="Sofia";
$agenda[2]['telefono']="3123456211";
$agenda[2]['email']="sofia@hotmail.com";

$agenda[3]['nombre'] ="Sofia";
$agenda[3]['telefono']="3123456211";
$agenda[3]['email']="sofia@hotmail.com";

$agenda[4]['nombre'] ="Dayana";
$agenda[4]['telefono']="3123456211";
$agenda[4]['email']="Dayana@hotmail.com";

$agenda[5]['nombre'] ="sergio";
$agenda[5]['telefono']="3123456211";
$agenda[5]['email']="sergio@hotmail.com";

$agenda[6]['nombre'] ="Juan";
$agenda[6]['telefono']="3123456211";
$agenda[6]['email']="juan@hotmail.com";

echo $agenda[1]['nombre'];



for ($indice=0; $indice <=6; $indice++) { 
	
	echo '

	<table border=2 width=300px bgcolor="#A9BCF5">

	<tr>

	<td>
		Nombre:
		</td>
		<td>'.$agenda[$indice]['nombre'].'
		</td>
	</tr>

	<tr>

	<td>
		Telefono:
		</td>
		<td>'.$agenda[$indice]['telefono'].'
		</td>
	</tr>

	<tr>
	<td>
		Email:
		</td>
		<td>'.$agenda[$indice]['email'].'
		</td>
	</tr>

	</table>
	';



}





?>