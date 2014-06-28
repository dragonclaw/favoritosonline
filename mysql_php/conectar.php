<?php
//nombre servidor, usuario, password
$conexion = mysql_connect("localhost","video2brain","video2brain");
if(!$conexion)
	{
	die ("no he podido conectar: ".mysql_error());
	}
/* YA SE CREO LA BASE DE DATOS, ESTE TROZO CREA LA BASE DE DATOS
	
if (mysql_query("CREATE DATABASE primeraBase",$conexion))
{
echo "se ha creado la base de datos";	
}else
{
echo"no se ha podido crear por el siguiente error".mysql_error();
}

//el video que genera la clave primaria.

if (mysql_query("CREATE DATABASE agenda",$conexion))
{
echo "se ha creado la base de datos";	
}else
{
echo"no se ha podido crear por el siguiente error".mysql_error();
}*/

//preparo la peticion

mysql_select_db("agenda",$conexion);
$sql = "CREATE TABLE miagenda
(
personaID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personaID),
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int
)";

//ejecuto la peticion, ejectua lo que se hizo en la peticion anterior.

mysql_query($sql,$conexion);
	
mysql_close($conexion);

?>