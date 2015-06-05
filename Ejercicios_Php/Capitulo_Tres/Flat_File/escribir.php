<?php

$archivo ="text.txt";
$contenido="Mi Nombre es Sandra Yohanna Chaparro Gomez";

$manejador=fopen($archivo,'w+');
fwrite($manejador, $contenido);


?>