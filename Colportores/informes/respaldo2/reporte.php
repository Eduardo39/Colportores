@author Eduardo Ortiz 
@version 1.0 
<?php

include_once('config.php');


class  Tablas{


function __construct($id, $nombre_colportor, $libro, $Cliente, $monto, $pedidos, $contacto_misionero, $compras, $viaticos, $campo, $asociado, $fecha, $total)
	{
	
    $this->id_informes=$id;
	$this->nombre_colportor=$nombre_colportor;
	$this->libro=$libro;
	$this->Cliente=$Cliente;
	$this->monto=$monto;
    $this->pedidos=$pedidos;
    $this->contacto_misionero=$contacto_misionero;
    $this->compras=$compras;
    $this->viaticos=$viaticos;
    $this->campo=$campo;
    $this->asociado=$asociado;
    $this->fecha=$fecha;
    $this->total=$total;

	}


public function usuarios(){

$conexiondatos = new Conexion();
$mysqli = $conexiondatos->con();

if ($this->id_informes!=="" || $this->nombre_colportor!==""){
 $consulta = "SELECT * FROM informes where nombre_colportor='$this->nombre_colportor' and libro='$this->libro'";
}else{
 $consulta = "SELECT * FROM informes";
}



$resultado = $mysqli->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {

echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td><td>".$fila[7]."</td><td>".$fila[8]."</td><td>".$fila[9]."</td><td>".$fila[10]."</td><td>".$fila[11]."</td>
<td><center>
<a href=catalogoinformes.php?id_us=".$fila[0]."><img src=http://ventadeactivos.com/img/ico2.png width=35 height=35 /></a><a href=actualiza.php?borrar=".$fila[0]."><img src=http://www.unipamplona.edu.co/unipamplona/hermesoft/portalIG/PaginasAmarillas/publico/ayuda/paginas_amarillas/images/eliminar.gif width=35 height=35 /></a>
</center></td>";
echo "</tr>"; 
       
 $i++;
}
echo "</table>";

}


}




?>