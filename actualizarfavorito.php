<?php  

session_start();

//recuperacion de variables de entorno por el comando GET

$usuario = $_SESSION['usuario'];
$contrasena =$_SESSION['contrasena'];

$titulo=$_GET['titulo'];
$direccion=$_GET['direccion'];
$categoria=$_GET['categoria'];
$comentario=$_GET['comentario'];
$valoracion=$_GET['valoracion'];

$db = new PDO('sqlite:favoritos.db');

$peticion = "SELECT * FROM favoritos WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

$resultado = $db->query($peticion);

echo "
<table border=1 width =100%>
<tr>
<td>TITULO</td>
<td>DIRECCION</td>
<td>CATEGORIA</td>
<td>COMENTARIO</td>
<td>VALORACION</td>
<td></td>
</tr>
";



foreach($resultado as $fila)
{
echo "<tr><form action='actualizarvalores.php' method='POST'>";
echo "<td><input type='text' name='titulo' value='".$fila['titulo']."'></td>";
echo "<td><input type='text' name='direccion' value='".$fila['direccion']."'></td>";
echo "<td><select name='categoria'>
	<option value='salud'>SALUD</option>
	<option value='trabajo'>TRABAJO</option>
	<option value='hobby'>Hobby</option>
	<option value='personal'>PERSONAL</option>
	<option value='otros'>OTROS</option>
	<option value='".$fila['categoria']."' selected>".$fila['categoria']."</option>
	 </td>";
echo "<td><input type='text' name='comentario' value='".$fila['comentario']."'></td>";
echo "<td><input type='text' name='valoracion' value='".$fila['valoracion']."'></td>";
echo "<td><input type='submit'></td>";
echo "</tr>";
}
echo "</table>";

$_SESSION['titulo'] = $titulo;

$db = null;

?>