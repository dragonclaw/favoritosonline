<html>
<head>
	<title>FORMULARIO NUEVO USUARIO</title>
</head>
<body>
	<table>
		<tr>
		<td>
			INTRODUCE TU NUEVO NOMBRE DE USUARIO
		</td>
		</tr>
		<tr>
			<td>
				<form action="nuevo_usuario.php" method="post">
				<input type="text" name="usuario" value="" width=50%>
			</td>
		</tr>
		<tr>
			<td>
				INTRODUCE TU NUEVA CONTRASENA
			</td>	
		</tr>
		<tr>
			<td>
				<input type="password" name="contrasena" width=50%>

			</td>	
		</tr>
		<tr>
			<td>
				INTRODUCE TU NOMBRE
			</td>	
		</tr>
		<tr>
			<td>
				<input type="text" name="nombre" width=50%>

			</td>	
		</tr>
		<tr>
			<td>
				INTRODUCE TU APELLIDO
			</td>	
		</tr>
		<tr>
			<td>
				<input type="text" name="apellido" width=50%>

			</td>	
		</tr>
		<tr>
			<td>
				INTRODUCE TU EDAD
			</td>	
		</tr>
		<tr>
			<td>
				<input type="text" name="edad" width=50%>

			</td>	
		</tr>
		<tr>
			<td>
				<?php
				echo '<input type="hidden" name="pagina" value='.$_SERVER['PHP_SELF'].' width=50%>';
				echo '<input type="hidden" name="permisos" value=3 width=50%>';
				?>
			</td>	
		</tr>
		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
			</form>

	</table>

	YA TIENES UN USUARIO??? PULSA <a href="formulariologin.php">AQUI!!!</a>
</body>
</html>
