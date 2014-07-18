<?php

session_start();
try{
$db = new PDO('sqlite:favoritos.db');

$usuario = $_GET['usuario'];
$contrasena =$_GET['contrasena'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$edad=$_GET['edad'];
$permisos=$_GET['permisos'];


$consulta = "DELETE FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre='".$nombre."' AND apellido='".$apellido."' AND edad=".$edad." AND permisos=".$permisos."";

echo $consulta; //CON ESTO VEMOS LA CONSULTA SQLITE A VER SI ESTA BIEN O NO.
//sleep(10);
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
	<meta http-equiv='refresh' content='0;url=gestion_usuarios.php'>
	</head>

</html>

";

?>