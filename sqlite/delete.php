<?php
try{
$db = new PDO("sqlite:bibliotecacd.db");

$consulta = "DELETE FROM Discos WHERE Artistas='Queen'";

$resultado= $db->exec($consulta);

}
catch(PDOException $e)

{

echo "Exception : ".$e->getMessage();

}
$db = NULL;

?>