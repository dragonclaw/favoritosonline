<?php

$conexion = mysql_connect("localhost","video2brain","video2brain");

if(!$conexion)
{
die(mysql_error());	
}

mysql_select_db("agenda",$conexion);

mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono) VALUES ('Marta','Lopez',14,'50431311')");


mysql_close($conexion);