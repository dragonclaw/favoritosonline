<?php

$db = new PDO("sqlite:bibliotecacd.db");

$consulta = "UPDATE Discos SET Artista ='Queen3333' Where Artista ='Queen2'";

$db->query($consulta);

$db = null;

?>