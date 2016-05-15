@author Eduardo Ortiz 
@version 1.0 
<!DOCTYPE html>
<html>
<head>
	<title>Registro de Colportor</title>
	<link rel="stylesheet" type="text/css" href="registrocolportor.css">
</head>
	<body>
	<form method="POST" action="colportorregistro.php" > 
	<div  id="contenedor">
		<h1>Registro de Colportor</h1>
		<div>
			<p><label for="Tipo de Colportor">Tipo de Colportor:</label><select name="Tipo de Colportor">
			<option>Emprendedor</option>
			<option>Colportor</option>
			</select></p>
		</div>
		<div>
			<p><label for="Nombres">Nombres:</label><input id="Nombres" type="Nombres"></p>
		</div>
		<div>
			<p><label for="Apellidos">Apellidos:</label><input id="Apellidos" type="Apellidos"></p>
		</div>
		<div>
			<p><label for="Universidad">Universidad:</label><select name="Universidad">
			<option>Universidad de Navojoa</option>
			</select></p>
		</div>
		<div>
			<p><label for="Sexo">Sexo:</label><select name="Sexo">
			<option>Masculino</option>
			<option>Femenino</option>
			</select></p>
		</div>
		<div>
			<p><label for="Idenficacion">Identificacion:</label><input id="Identificacion" type="Identificacion"></p>
		</div>
		<div>
			<p><label for="Provincia/Estado">Provincia/estado:</label><input id="Provincia/Estado" type="Provincia/Estado"></p>
		</div>
		<div>
			<p><label for="Pais">Pais:</label><input id="Pais" type="Pais"></p>
		</div>
		<div>
			<p><label for="Correo">Correo:</label><input id="Correo" type="Correo"></p>
		</div>
		<div>
			<p><label for="Telefono">Telefono:</label><input id="Telefono" type="Telefono"></p>
		</div>
		<div>
		<input type="submit" value="Registrarse" id="Registrarse"></input>
		</div>
	</body>
	</div>
	</form>
</html>