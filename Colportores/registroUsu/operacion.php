@author Eduardo Ortiz 
@version 1.0 
<?php
// CREANDO MI CONEXION
include_once ( ' config.php ' );
class  NuevoRegistro 
{
	
	
	public  $id_informes ;
	public $nombre_colportor;
	public $libro;
	public $cliente;
	public $tipo;
	
	function __construct($id, $nombre, $edad, $contrasena, $tipo)
	{
	$this ->ID= $id ;
	$this->nombre=$nombre;
	$this->edad=$edad;
	$this->contrasena=$contrasena;
	$this->tipo=$tipo;
	}
	public function actualiza()
	{
	$conexionSacadatos = new Conexion();
    $linkSacadatos = $conexionSacadatos->con();			
	$consulta = "UPDATE nombre SET nombre='$this->nombre', edad='$this->edad', contrasena='$this->contrasena', tipo='$this->tipo' where id=$this->id ";
			if ($linkSacadatos->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else {
				cabecera ( " Lugar: login.php " );
				}
	}
	public function inserta()
	{
		$conexionSacadatos = new Conexion();
   		$linkSacadatos = $conexionSacadatos->con();
			$consulta = "INSERT into nombre values('', '$this->nombre', '$this->edad', '$this->contrasena', '$this->tipo') ";
			if ($linkSacadatos->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else {
				cabecera ( " Lugar: login.php " );
				}
	}
	public function borra()
	{
		$conexionSacadatos = new Conexion();
   		$linkSacadatos = $conexionSacadatos->con();
			$consulta  =  " DELETE  de nombre , donde ID = $ this -> Identificación " ;
			if ($linkSacadatos->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else {
				cabecera ( " Lugar: login.php " );
				}
	}
}
? >