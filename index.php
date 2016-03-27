<!DOCTYPE html>
<html lang="es">
<head><!--cabecera-->
	<title>login</title>
	<meta charset="utf-8" />
	<!--global styles-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>

<h1>Inicio de Sesion</h1>
	<form action="session.php" method="post">
		<div id="login-bg">
			<label>Usuario</label>
			<input type="text" name="login" autofocus required>

			<label>Clave</label>
			<input type="password" name="passwd" required>

			<input type="submit" value="Ingresar">
			<input type="reset" value="Borrar">
		</div>		
	</form>
<span class="texto">
	<p class="sms">usuario:admin</p>
	<p class="sms">clave:admin</p>
</span>

</body>
</html>