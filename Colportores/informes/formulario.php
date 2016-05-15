@author Eduardo Ortiz 
@version 1.0 
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="registrocolportor.css">
</head>
<body>
<form method="POST" action="guardarformulario.php" > 
<div  id="contenedor">
		<h1>Informes</h1>
    <div>
      <p><label for="Nombre de Colportor">ID informes:</label><input id="informes" name="id_informes"type="Nombre de Colportor"></p>
    </div>
		<div>
			<p><label for="Nombre de Colportor">Nombre de Colportor:</label><input id="colportor" name="nombre_colportor"type="Nombre de Colportor"></p>
		</div>
		<div>
			<p><label for="Libro o Coleccion">Libro o Coleccion:</label><select name="libro" id="libro">
			<option>Colceccion Verano</option>
			<option>dulcemente saludable</option>
			</select></p>
		</div>
		<div>
			<p><label for="Cliente">Cliente:</label><input name="cliente" type="Cliente">
		</div>
		<div>
			<p><label for="Monto">Monto:</label><input name="monto" id="Monto"  >
		<div>
			<p><label for="pedidos">Pedidos:</label><input name="pedidos" id="pedidos" type="pedidos">
		</div>
		<div>
			<p><label for="Contactos Misioneros">Contactos Misioneros:</label><input id="misioneros"name="contacto_misionero"></p>
		</div>
		<div>
			<p><label for="Compras Gema">Compras Gema:</label><input id="compras"name="compras"></p>
		</div>
		<div>
			<p><label for="viaticos">Viaticos:</label><select name="viaticos" id="viaticos">
			<option>--</option>
			<option>si</option>
			<option>no</option>
			</select></p>
		</div>
		<div>
			<p><label for="Campo">Campo:</label><input id="campo"name="campo"></p>
		</div>
		<div>
			<p><label for="Asociados">Asociado:</label><select name="asociado" id="asociado">
			<option>--</option>
			<option>si</option>
			<option>no</option>
			</select></p>
		</div>
		<div>
			<p><label for="fecha">Fecha:</label><input type="date" name="fecha"></p>
		</div>
		<div>
			<p><label for="Total">Total:</label><input id="Total" name="total"></p>
		</div>
		<a ><button type="submit" value="Grabar Informe" >Guardar</button></a>
		</div>
    </form>

</body>
</html>