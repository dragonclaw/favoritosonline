<?php
session_start();
//obtenemos las variables del formulario
$coderror = 0;
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$permisos=$_POST['permisos'];
$paginainvocada=$_POST['pagina'];

//falta el privilegio con el que se va a crear el usuario.
/*PRIVILEGIOS
1=ADMIN
2=CONTROLADOR
3=USUARIO REGISTRADO
4=USUARIO INVITADO
*/
//POR DEFECTO 3

//ESTO ES TOTALMENTE DIFERENTE DEL CURSO, YA QUE NO VALIDA SI EL USUARIO EXISTE O NO, PARA MI ESO ES CLAVE.

//abrimos una conexion a la base de datos

$db=new PDO('sqlite:favoritos.db');

//creamos la consulta

$consulta = 'SELECT * FROM usuarios';

//enviamos la consulta a la base de datos

$resultado = $db->query($consulta);

//si el resultado es positivo enviamos a principal.php con la variable de usuario asignada

foreach ($resultado as $fila) 
{

	if($fila['usuario']==$usuario)
		{
		$coderror = 1;
		break;
		}
}

if ($coderror)
{
echo "ESTE NOMBRE DE USUARIO YA EXISTE, ESCOJA OTRO ";
echo "haga click <a href='".$paginainvocada."'>ACA</a> PARA VOLVER o espere";
}
else
{

$peticion = "INSERT INTO usuarios(usuario, contrasena, nombre, apellido, edad, permisos) 
VALUES('".$usuario."','".$contrasena."','".$nombre."','".$apellido."',".$edad.",".$permisos.");";

$db->exec($peticion);

echo "SE HA CREADO CON EXITO";
echo "haga click <a href='".$paginainvocada."'>ACA</a> PARA CREAR OTRO USUARIO o espere";
}

$db=null;


?>