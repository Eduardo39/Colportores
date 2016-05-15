@author Eduardo Ortiz 
@version 1.0 
<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div>
<h1>Iniciar Sesion</h1>
<img src="http://biblioteca.unav2.edu.mx/recursos/footer/LOGO%20NUEVO%20UNAV-01.png">

		<form method="POST" action="validacion.php">
		
		<fieldset>
			<label>Nombre de Usuario</label></br>
			<input type="text" name="usuario">
			 </br>
			Contraseña<br/>
			<input type="password" name="pass">
			<br /> <br/>
			<button class="success hollow button" href="#">Iniciar Sesion</button>
			</fieldset>
			</form>
			</div>
			

			<style type="text/css">
			</style>
</body>
</html>