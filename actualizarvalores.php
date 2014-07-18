<?php

session_start();

//recuperacion de variables de entorno por el comando GET

$usuario = $_SESSION['usuario'];
$contrasena =$_SESSION['contrasena'];
$tituloantiguo =$_SESSION['titulo'];

$titulo=$_POST['titulo'];
$direccion=$_POST['direccion'];
$categoria=$_POST['categoria'];
$comentario=$_POST['comentario'];
$valoracion=$_POST['valoracion'];

$db = new PDO('sqlite:favoritos.db');

//el update para varios campos se realiza con comas.

$consulta = "UPDATE favoritos SET titulo='".$titulo."', direccion='".$direccion."', categoria='".$categoria."', comentario='".$comentario."', valoracion='".$valoracion."' Where titulo='".$tituloantiguo."'";

$db->query($consulta);

$db = null;

//REDIRECCIONAMOS NUEVAMENTE A PRINCIPAL
echo "
<html>
	<head>
	<meta http-equiv='refresh' content='0;url=principal.php'
	</head>
</html>
";
?>

?>