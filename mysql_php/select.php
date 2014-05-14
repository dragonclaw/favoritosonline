<?php
//aca conectamos con la base de dato
$conexion = mysql_connect("localhost","video2brain","video2brain");

//esto es por si falla
if(!$conexion){
	
	die("no he podido conectar porque:".mysql_error());
}
//aca se selecciona la base de datos
mysql_select_db("agenda",$conexion);
//realiza la peticion (variable)
$peticion = mysql_query("SELECT * FROM miagenda");
//lista los elementos de la base de datos
while($fila = mysql_fetch_array($peticion))
{
	echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
	echo "<br>";	
}
//cierra la conexion
mysql_close($conexion);
?>