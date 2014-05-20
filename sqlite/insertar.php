<?php

$db = new PDO('sqlite:bibliotecacd.db');

$peticion = "INSERT INTO Discos(Artista, Disco, Anio) VALUES('Queen','Queen',1973);".
"INSERT INTO Discos(Artista, Disco, Anio) VALUES('Queen2','Queen22',1990);";

$db->exec($peticion);

$db = NULL;
?>