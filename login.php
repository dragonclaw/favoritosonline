<?php
session_start();
//obtenemos las variables del formulario

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$coderror=$_SESSION['coderror'];
//abrimos una conexion a la base de datos

$db=new PDO('sqlite:favoritos.db');

//creamos la consulta

$consulta = 'SELECT * FROM usuarios';

//enviamos la consulta a la base de datos

$resultado = $db->query($consulta);

//si el resultado es positivo enviamos a principal.php con la variable de usuario asignada

foreach ($resultado as $fila) 
{
echo $fila['usuario']."</n>";
echo $usuario."</n>";
echo $fila['contrasena']."</n>";
echo $contrasena."</n>";

	if($fila['usuario']==$usuario & $fila['contrasena']==$contrasena)
		{
			$_SESSION['usuario']=$usuario;
			$_SESSION['contrasena']=$contrasena;
			$_SESSION['permisos']=$fila['permisos'];
			$_SESSION['coderror']=0;
			$coderror=0;

			echo '
				<html>
				<head>
				<meta  http-equiv="refresh" content=0;url="principal.php">
				</head>
				</html>
			';
			break;

		}
		//si no, por ahora nada.
		else
		{
		$coderror=1;
		}
}

$_SESSION['coderror']=$coderror;
$db=null;
if($coderror)
{
	echo '
				<html>
				<head>
				<meta  http-equiv="refresh" content=0;url="formulariologin.php">
				</head>
				</html>
			';
}
?>