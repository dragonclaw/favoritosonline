<?php

session_start();
if($_SESSION['permisos'] == 1)
{


echo "tu usuario es:".$_SESSION['usuario']."<br/> TU CONTRASENA ES:".$_SESSION['contrasena'];

//CREAR CONEXION
$db = new PDO('sqlite:favoritos.db');

//ESTABLEZCO LA CONSULTA

$peticion = "SELECT * FROM usuarios";

//EJECUTO LA CONSULTA

$resultado = $db->query($peticion);

//IMPRIMO LA CONSULTA

//esto crea los titulos de la tabla

echo "<table border=1>";
echo "<tr><td>USUARIO</td><td>CONTRASENA</td><td>NOMBRE</td><td>APELLIDO</td><td>EDAD</td><td>PERMISOS</td><td></td><d></td>;
</tr>";


foreach($resultado as $fila)
{
	
echo "<tr><td>".$fila['usuario']."</td>";
echo "<td>".$fila['contrasena']."</td>";
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['apellido']."</td>";
echo "<td>".$fila['edad']."</td>";
echo "<td>".$fila['permisos']."</td>";
echo "<td><a href='eliminar_usuario.php?usuario=".$fila['usuario']."&contrasena=".$fila['contrasena']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."&permisos=".$fila['permisos']."'>ELIMINAR USUARIO</a></td>";
echo "<td><a href='form_actualizar_usuario.php?usuario=".$fila['usuario']."&contrasena=".$fila['contrasena']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."permisos=".$fila['permisos']."'>ACTUALIZAR USUARIO</a></td>";
echo "</tr>";


}
//añadir un registro (dentro de la tabla)
echo "
<tr>
<form action='nuevo_usuario.php' method='POST'>
	<td><input type='text' name='usuario'></td>
	<td><input type='text' name='contrasena'></td>
	<td><input type='text' name='nombre'></td>
	<td><input type='text' name='apellido'></td>
	<td><input type='text' name='edad'></td>
	<td><input type='text' name='permisos'></td>
	<td><input type='hidden' name='pagina' value=".$_SERVER['PHP_SELF']." width=50%></td>
	<td><input type='submit'></td>
	<td></td>
</tr>
";
echo "</table>";

//SE CIERRA LA CONSULTA

$db = null;
}
else{echo "TU NO ERES USUARIO ADMIN";}
?>