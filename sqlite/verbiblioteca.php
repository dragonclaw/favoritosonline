<?php

$db = new PDO("sqlite:bibliotecacd.db");
$consulta = "SELECT * FROM Discos";
//$consulta = "SELECT * FROM Discos WHERE Artista = 'Queen' ORDER BY Anio ASC";//sin el where no selecciona todo de la db, order es ASC y DESC

$resultado = $db->query($consulta);

echo "<table border=1>";
echo "<tr><td>Artista</td><td>Disco</td><td>Anio</td></tr>";

foreach($resultado as $fila)
{
	
echo "<tr><td>".$fila['Artista']."</td>";
echo "<td>".$fila['Disco']."</td>";
echo "<td>".$fila['Anio']."</td>";

}

echo "</table>";

$db = null;

?>