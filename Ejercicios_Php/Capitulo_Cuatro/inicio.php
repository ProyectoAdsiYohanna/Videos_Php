<?php

session_start();


$_SESSION['Usuario']="Yohanna";
$_SESSION['Contrasena']="Yohanna";

echo '
<html>
	<head>

	<meta http-equiv="REFRESH" content="0;url=principal.php">

	</head>
</html>

';



?>