@author Eduardo Ortiz 
@version 1.0 
<!DOCTYPE html>
<html >

  <head>

    <title>informes</title>
  <link rel="stylesheet" type="text/css" href="registrocolportor.css">
  </head>
  <body>
<?php
include_once('config.php');
$conexiondatos = new Conexion();
 $cone = $conexiondatos->con();
if (isset($_GET['id_us'])){
  $id_informes=$_GET['id_us'];

$consulta = "SELECT * FROM informes where id_informes=$id_informes";
$result = $cone->query($consulta);
$fila = $result->fetch_row();
$s="";  
$id=$fila[0];
$nombre_colportor=$fila[1];
$libro=$fila[2];
$Cliente=$fila[3];
$monto=$fila[4];
$pedidos=$fila[5];
$contacto_misionero=$fila[6];
$compras=$fila[7];
$viaticos=$fila[8];
$campo=$fila[9];
$asociado=$fila[10];
$fecha=$fila[11];
$total=$fila[12];

}else{
$s="s";
$id="";
$nombre_colportor="";
$libro="";
$Cliente="";
$monto="";
$pedidos="";
$contacto_misionero="";
$compras="";
$viaticos="";
$campo="";
$asociado="";
$fecha="";
$total="";


}


include_once('actualizar.php');
//echo $_POST["Guardar"];
if(isset($_POST['id'])){
$actualizado=new  informes($_POST["id"], $_POST["nombre_colportor"], $_POST["libro"], $_POST["Cliente"], $_POST["monto"], $_POST["pedidos"], $_POST["contacto_misionero"], $_POST["compras"], $_POST["viaticos"], $_POST["campo"], $_POST["asociado"], $_POST["fecha"], $_POST["total"]);
$actualizado->actualiza();
}

elseif (isset($_POST['Guardar'])){
$actualizado=new  informes($_POST["ids"], $_POST["nombre_colportor"], $_POST["libro"], $_POST["Cliente"], $_POST["monto"], $_POST["pedidos"], $_POST["contacto_misionero"], $_POST["compras"], $_POST["viaticos"], $_POST["campo"], $_POST["asociado"], $_POST["fecha"], $_POST["total"]);
$actualizado->guardar();
}
  elseif(isset($_GET["borrar"])){
  $actualizado=new  informes($_GET["borrar"],0,0,0);
$actualizado->eliminar();
}



?>  
<div  id="contenedor">
    <h1>Informes</h1>
    <div>
      <p><label for="Nombre de Colportor">Nombre de Colportor:</label><input id="colportor" type="Nombre de Colportor"></p>
    </div>
    <div>
      <p><label for="Libro o Coleccion">Libro o Coleccion:</label><select name="libro" id="libro">
      <option>Colceccion Verano</option>
      <option>dulcemente saludable</option>
      </select></p>
    </div>
    <div>
      <p><label for="Cliente">Cliente:</label><input id="Cliente" type="Cliente">
    </div>
    <div>
      <p><label for="Monto">Monto:</label><input id="Monto" type="Monto">
    <div>
      <p><label for="pedidos">Pedidos:</label><input id="pedidos" type="pedidos">
    </div>
    <div>
      <p><label for="Contactos Misioneros">Contactos Misioneros:</label><input id="misioneros" type="Contactos Misioneros"></p>
    </div>
    <div>
      <p><label for="Compras Gema">Compras Gema:</label><input id="compras" type="compras Gema"></p>
    </div>
    <div>
      <p><label for="viaticos">Viaticos:</label><select name="viaticos" id="viaticos">
      <option>--</option>
      <option>si</option>
      <option>no</option>
      </select></p>
    </div>
    <div>
      <p><label for="Campo">Campo:</label><input id="campo" type="Campo"></p>
    </div>
    <div>
      <p><label for="Asociados">Asociado:</label><select name="asociado" id="asociado">
      <option>--</option>
      <option>si</option>
      <option>no</option>
      </select></p>
    </div>
    <div>
      <p><label for="fecha">Fecha:</label><input id="fecha" type="fecha"></p>
    </div>
    <div>
      <p><label for="Total">Total:</label><input id="Total" type="Total"></p>
    </div>
       <input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>">

<center><button value="1" name="env" class="button"><span>Actualizar</span></button></center>
</div>

     <!--tabla-->
     

  </body>	
</html>