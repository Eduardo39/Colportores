 @author Eduardo Ortiz 
@version 1.0 
 <?php
 

 require_once ('config.php');
$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();
$id_informes = $_POST["id_informes"]; 
$nombre_colportor = $_POST["nombre_colportor"]; 
$libro = $_POST["libro"];
$Cliente=$_POST["cliente"];
$monto = $_POST["monto"]; 
$pedidos= $_REQUEST["pedidos"]; 
$contacto_misionero = $_POST["contacto_misionero"];   
$compras= $_POST["compras"]; 
$viaticos= $_POST["viaticos"]; 
$campo = $_POST["campo"];
$asociado = $_POST["asociado"]; 
$fecha = $_POST["fecha"]; 
$total = $_POST["total"];   
$query="INSERT INTO informes(id_informes, nombre_colportor, libro, Cliente, monto, pedidos, contacto_misionero,compras, viaticos, campo, asociado,fecha,total)VALUES('$id_informes','$nombre_colportor','$libro','$Cliente','$monto','$pedidos','$contacto_misionero','$compras','$viaticos','$campo','$asociado','$fecha','$total')";
$resultado=$mysqli->query($query);
header( "Location:formulario.php");  
?>