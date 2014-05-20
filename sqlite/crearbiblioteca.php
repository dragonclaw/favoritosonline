<?php
//crea la conexion a la base de datos
$db = new PDO('sqlite:bibliotecacd.db');
//hace la peticion a la base de datos
$peticion = "CREATE TABLE Discos(
Artista TEXT NOT NULL,
Disco TEXT,
Anio INTEGER
)";
//ejecuta la peticion a la base de datos
$db->exec($peticion);
//cierra la base de datos
$db = NULL;

?>