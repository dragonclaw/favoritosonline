<html>
<head>
	<title>FORMULARIO LOGIN FAVORITOS ONLINE</title>
</head>
<body>
<?php
session_start();
if($_SESSION['coderror'])
	{
echo "EL NOMBRE DE USUARIO QUE INTRODUJISTE NO EXISTE, SELECCIONA OTRO O CREALO <a href='form_nuevo_usuario.php'>AQUI!!!</a>";
	}
?>
	<table>
		<tr>
		<td>
			INTRODUCE TU NOMBRE DE USUARIO
		</td>
		</tr>
		<tr>
			<td>
				<form action="login.php" method="post">
				<input type="text" name="usuario" value="" width=50%>
			</td>
		</tr>
		<tr>
			<td>
				INTRODUCE TU CONTRASENA
			</td>	
		</tr>
		<tr>
			<td>
				<input type="password" name="contrasena" width=50%>

			</td>	
		</tr>
		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
			</form>

	</table>

	NO ERES USUARIO TODAVIA??? HAZ CLICK <a href="form_nuevo_usuario.php">AQUI!!!</a>
	
</body>
</html>