@author Eduardo Ortiz 
@version 1.0 
<?php
include('config.php');
$nombre = mysql_real_escape_string($_POST['usuario']);
$contra = mysql_real_escape_string($_POST['pass']);
include('accesologin.php');
$conexion=new Validacion($nombre,$contra);
$conexion->valida(); 
?>