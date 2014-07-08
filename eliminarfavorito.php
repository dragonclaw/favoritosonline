<?php

session_start();
try{
$db = new PDO('sqlite:favoritos.db');

$usuario = $_SESSION['usuario'];
$contrasena =$_SESSION['contrasena'];

$titulo=$_GET['titulo'];
$direccion=$_GET['direccion'];
$categoria=$_GET['categoria'];
$comentario=$_GET['comentario'];
$valoracion=$_GET['valoracion'];

$consulta = "DELETE FROM favoritos WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

//echo $consulta; //CON ESTO VEMOS LA CONSULTA SQLITE A VER SI ESTA BIEN O NO.
$resultado= $db->query($consulta);
}
catch(PDOException $e)

{

echo "Exception : ".$e->getMessage();

}
$db = NULL;
echo "
<html>
	<head>
	<meta http-equiv='refresh' content='0;url=principal.php'>
	</head>

</html>

";

?>