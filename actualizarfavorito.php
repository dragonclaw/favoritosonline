<?php  

session_start();

//recuperacion de variables de entorno por el comando GET

$$usuario = $_SESSION['usuario'];
$contrasena =$_SESSION['contrasena'];

$titulo=$_GET['titulo'];
$direccion=$_GET['direccion'];
$categoria=$_GET['categoria'];
$comentario=$_GET['comentario'];
$valoracion=$_GET['valoracion'];

$db = new PDO('sqlite:favoritos.db');

$consulta = "SELECT * FROM favoritos WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

echo $consulta;

$resultado = db->exec($consulta);

echo "
<table border=1 width =100%>
<tr>
<td>TITULO</td>
<td>DIRECCION</td>
<td>CATEGORIA</td>
<td>COMENTARIO</td>
<td>VALORACION</td>
</tr>
";

foreach($resultado as $fila)
{
	
echo "<tr><td>".$fila['titulo']."</td>";
echo "<td>".$fila['direccion']."</td>";
echo "<td>".$fila['categoria']."</td>";
echo "<td>".$fila['comentario']."</td>";
echo "<td>".$fila['valoracion']."</td>";
echo "</tr></table>";
}



?>



