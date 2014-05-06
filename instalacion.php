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

//1.3 Insertar Contenido en la tabla

$db->exec($consulta);

//1.4 Cerrar Conexion

$db = NULL;

//1.5 CONTENIDO DE PRUEBAS PARA LA TABLA!!!!----------------------

//1.5.1 Conexion

$db = new PDO('sqlite:favoritos.db');

//1.5.2 Generamos la consulta

$peticion = "INSERT INTO favoritos(usuario, contrasena, titulo, direccion, categoria, comentario, valoracion) 
VALUES('jocarsa','jocarsa','Google','http://www.google.co.ve','tecnologia','buscador',10);".

"INSERT INTO favoritos(usuario, contrasena, titulo, direccion, categoria, comentario, valoracion) 
VALUES('jocarsa','jocarsa','JOCARSA','http://www.JOCARSA.COM','tecnologia','MI_PAGINA',10);".

//1.5.3 Insertar Contenido en la tabla

$db->exec($peticion);

//1.5.4 Cerrar Conexion

$db = NULL;

//2. crear tabla usuarios mysql

//2.1 Conexion

//2.2 Creart Tabla

//2.3 Insertar Contenido en la tabla

//2.4 Cerrar Conexion

//3. crear tabla logs mysql

//3.1 Conexion

//3.2 Creart Tabla

//3.3 Insertar Contenido en la tabla

//3.4 Cerrar Conexion

?>