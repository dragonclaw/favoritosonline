<?php

session_start();

echo "tu usuario es:".$_SESSION['usuario']."<br/> TU CONTRASENA ES:".$_SESSION['contrasena'];

//CREAR CONEXION
$db = new PDO('sqlite:favoritos.db');

//ESTABLEZCO LA CONSULTA

//$peticion = "SELECT * FROM favoritos";
$peticion = "SELECT * FROM favoritos WHERE usuario = '".$_SESSION['usuario']."' and contrasena = '".$_SESSION['contrasena']."';";

//EJECUTO LA CONSULTA

$resultado = $db->query($peticion);

//IMPRIMO LA CONSULTA

//esto crea los titulos de la tablhttp://instagram.com/p/qSSf5KhXpQ/?modal=truea


echo "<table border=1>";
echo "<tr><td>TITULO</td><td>DIRECCION</td><td>CATEGORIA</td><td>COMENTARIO</td><td>VALORACION</td><td></td><td></td>;
</tr>";


foreach($resultado as $fila)
{
	
echo "<tr><td>".$fila['titulo']."</td>";
echo "<td>".$fila['direccion']."</td>";
echo "<td>".$fila['categoria']."</td>";
echo "<td>".$fila['comentario']."</td>";
echo "<td>".$fila['valoracion']."</td>";
//echo "<td>".$fila['usuario']."</td>";
echo "<td><a href='eliminarfavorito.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>ELIMINAR FAVORITO</a></td>";
echo "<td><a href='actualizarfavorito.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>ACTUALIZAR FAVORITO</a></td>";
echo "</tr>";


}
//añadir un registro (dentro de la tabla)
echo "
<tr>
<form action='crearfavorito.php' method='POST'>
	<td><input type='text' name='titulo'></td>
	<td><input type='text' name='direccion'></td>
	<td><select name='categoria'>
	<option value='salud'>SALUD</option>
	<option value='trabajo'>TRABAJO</option>
	<option value='hobby'>Hobby</option>
	<option value='personal'>PERSONAL</option>
	<option value='otros'>OTROS</option>
	</td>
	<td><input type='text' name='comentario'></td>
	<td><input type='text' name='valoracion'></td>
	<td><input type='submit'></td>
	";
	if ($_SESSION['permisos'] == 1)
	{
echo "<td><a href='gestion_usuarios.php'>GESTIONAR_USUARIOS</td>";
}
else
{
echo "<td></td>";
}
echo" </tr>
</table>";

//SE CIERRA LA CONSULTA

$db = null;

?>