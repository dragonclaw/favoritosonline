<?php

session_start();

echo "tu usuario es:".$_SESSION['usuario']."<br/> TU CONTRASENA ES:".$_SESSION['contrasena'];

//CREAR CONEXION
$db = new PDO('sqlite:favoritos.db');

//ESTABLEZCO LA CONSULTA

//$peticion = "SELECT * FROM favoritos";
$peticion = "SELECT * FROM favoritos WHERE usuario = 'jocarsa' and contrasena = 'jocarsa';";

//EJECUTO LA CONSULTA

$resultado = $db->query($peticion);

//IMPRIMO LA CONSULTA

//esto crea los titulos de la tabla


echo "<table border=1>";
echo "<tr><td>TITULO</td><td>DIRECCION</td><td>CATEGORIA</td><td>COMENTARIO</td><td>VALORACION</td><td>USUARIO</td></tr>";


foreach($resultado as $fila)
{
	
echo "<tr><td>".$fila['titulo']."</td>";
echo "<td>".$fila['direccion']."</td>";
echo "<td>".$fila['categoria']."</td>";
echo "<td>".$fila['comentario']."</td>";
echo "<td>".$fila['valoracion']."</td>";
echo "<td>".$fila['usuario']."</td>";
echo "</tr>";

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
</tr>
";

}
echo "</table>";

//SE CIERRA LA CONSULTA

$db = null;

?>