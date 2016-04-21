<?php  
include_once('config.php');
class Validacion{
	public $usuario;
	public $contrasena;
public function __construct($usuario, $contrasena)
    {
         $this->user = $usuario;
         $this->contra = $contrasena;
    }
 public function valida(){
 $conexionSacadatos = new Conexion();
 $linkSacadatos = $conexionSacadatos->con();
 
$consulta = "SELECT * FROM usuarios where usuario='$this->user' and password='$this->contra'";

$resultado = $linkSacadatos->query($consulta);
$fila = $resultado->fetch_row();
//$n = $resultado->num_rows();
if ($fila[5]){
	$valido=1;
	$usuario=$fila[5];
	session_start();
	$_SESSION["usuario"]=$usuario;
	header("Location: menu\llamar.html?valido=$valido");
}
	else{
$valido=0;
header("Location: config.php?valido=$valido");
}
  }
}
?>
