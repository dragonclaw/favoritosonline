<?php
session_start();

//crear variables

$usuario=$_SESSION['usuario'];
$contrasena=$_SESSION['contrasena'];

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

//conexion

//CREAR CONEXION
$db = new PDO('sqlite:favoritos.db');

//ESTABLEZCO LA CONSULTA

//$peticion = "SELECT * FROM favoritos";
$peticion = "INSERT INTO favoritos(usuario, contrasena, titulo, direccion, categoria, comentario, valoracion) 
VALUES('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion');";

//EJECUTO LA CONSULTA

$resultado = $db->query($peticion);

$db = NULL;
//IMPRIMO LA CONSULTA

//este codigo redirecciona nuevamente a principal.php

echo "
<html>
	<head>
	<meta http-equiv='refresh' content='0;url=principal.php'
	</head>
</html>
";
?>