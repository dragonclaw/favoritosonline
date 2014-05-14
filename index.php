<?php

session_start();

$_SESSION['usuario'] = "jocarsa";
$_SESSION['contrasena'] = "jocarsa";

echo '
<html>
	<head>
		<meta  http-equiv="refresh" content=0;url="principal.php">
	</head>

</html>


';

?>