@author Eduardo Ortiz 
@version 1.0 
<?php
class Conexion
{
	public function con()
	{
		global $mysqli;	
 $mysqli = new mysqli("localhost", "root", "", "colportores");
/* comprobar la conexión */
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
return $mysqli;
	}
}
