<?php
//1.crear tabla favoritos sqlite

//1.1 Conexion

$db = new PDO('sqlite:favoritos.db');

//1.2 Crear Tabla

$consulta = "CREATE TABLE favoritos(
usuario TEXT NOT NULL,
contrasena TEXT NOT NULL,
titulo TEXT,
dieccion TEXT,
categoria TEXT,
comentario TEXT,
valoracion INTEGER
)";

//1.3 Insertar Contenido de creacion en la tabla

$db->exec($consulta);

//1.4 Cerrar Conexion

$db = NULL;

//1.5 CONTENIDO DE PRUEBAS PARA LA TABLA!!!!----------------------

//1.5.1 Conexion

$db = new PDO('sqlite:favoritos.db');

//1.5.2 Generamos la consulta

$peticion = "INSERT INTO favoritos(usuario, contrasena, titulo, direccion, categoria, comentario, valoracion) VALUES( 'jocarsa', 'jocarsa2, 'Google', 'http://www.google.co.ve', 'tecnologia', 'buscador', 10);".

"INSERT INTO favoritos(usuario, contrasena, titulo, direccion, categoria, comentario, valoracion) VALUES('jocarsa','jocarsa','JOCARSA','http://www.JOCARSA.COM','tecnologia','MI_PAGINA',10);";

//1.5.3 Insertar Contenido en la tabla


$db->exec($peticion);

//1.5.4 Cerrar Conexion

$db = NULL;


//test

//CREAR CONEXION
$db = new PDO('sqlite:favoritos.db');

//ESTABLEZCO LA CONSULTA

$peticion = "SELECT * FROM favoritos;";

//EJECUTO LA CONSULTA

$resultado = $db->query($peticion);

//IMPRIMO LA CONSULTA

//esto crea los titulos de la tabla
echo "<table border=1>";
echo "<tr><td>TITULO</td><td>DIRECCION</td><td>CATEGORIA</td><td>COMENTARIO</td><td>VALORACION</td></tr>";


foreach($resultado as $fila)
{
	
echo "<tr><td>".$fila['titulo']."</td>";
echo "<td>".$fila['direccion']."</td>";
echo "<td>".$fila['categoria']."</td>";
echo "<td>".$fila['comentario']."</td>";
echo "<td>".$fila['valoracion']."</td>";

}
echo "</table>";

//SE CIERRA LA CONSULTA

$db = null;


//2. crear tabla usuarios mysql


//2.1 Conexion

$db = new PDO('sqlite:favoritos.db');

//2.2 Creart Tabla de usuarios

$consulta = "CREATE TABLE usuarios(
usuario TEXT NOT NULL,
contrasena TEXT NOT NULL,
nombre TEXT,
apellido TEXT,
edad INTEGER,
permisos INTEGER
)";


//2.3 Insertar Contenido de creacion de usuarios en la tabla
$db->exec($consulta);
//2.4 Cerrar Conexion
$db = NULL;

//2.5 CONTENIDO DE PRUEBAS PARA LA TABLA!!!!----------------------

//2.5.1 Conexion

$db = new PDO('sqlite:favoritos.db');

//2.5.2 Generamos la consulta

$peticion = "INSERT INTO usuarios(usuario, contrasena, nombre, apellido, edad, permisos) 
VALUES('jocarsa','jocarsa','jose vicente','carratala',32,1);";


//2.5.3 Insertar Contenido en la tabla

$db->exec($peticion);

//2.5.4 Cerrar Conexion

$db = NULL;


//3. crear tabla logs mysql

//3.1 Conexion

$db = new PDO('sqlite:favoritos.db');

//3.2 Crear Tabla

$consulta = "CREATE TABLE logs(
utc INTEGER,
anio INTEGER,
mes INTEGER,
dia INTEGER,
hora INTEGER,
minuto INTEGER,
segundo INTEGER,
ip TEXT,
navegador TEXT,
usuario TEXT,
contrasena TEXT,
)";

//3.3 Insertar Contenido de creacion en la tabla

$db->exec($consulta);

//3.4 Cerrar Conexion

$db = NULL;

//3.5 CONTENIDO DE PRUEBAS PARA LA TABLA!!!!----------------------

//2.5.1 Conexion

$db = new PDO('sqlite:favoritos.db');

//2.5.2 Generamos la consulta

$peticion = "INSERT INTO logs(utc, anio, mes, dia, hora, minuto, segundo, ip, navegador, usuario, contrasena) 
VALUES(00000000,2011,02,07,21,11,00,'127.0.0.1','chrome','jocarsa','jocarsa');";


//2.5.3 Insertar Contenido en la tabla

$db->exec($peticion);

//2.5.4 Cerrar Conexion

$db = NULL;




?>