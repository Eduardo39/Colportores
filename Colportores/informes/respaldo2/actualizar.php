@author Eduardo Ortiz 
@version 1.0 
<?php
// CREANDO MI CONEXION
include_once('config.php');
class informes
{
	public  $id;
	public  $nombre_colportor;
	public  $libro;
	public  $Cliente;
	public  $monto;
    public  $pedidos;
    public  $contacto_misionero;
    public  $compras;
    public  $viaticos;
    public  $campo;
    public  $asociado;
    public  $fecha;
    public  $total;


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
public function actualiza()
	{

		$conexiondatos = new Conexion();
 $cone = $conexiondatos->con();


		echo $consulta = "UPDATE informes SET nombre_colportor='$this->nombre_colportor', libro='$this->libro', Cliente='$this->Cliente', monto='$this->monto', pedidos='$this->pedidos', contacto_misionero='$this->contacto_misionero', compras='$this->compras', viaticos='$this->viaticos', campo='$this->campo', asociado='$this->asociado', fecha='$this->fecha', total='$this->total' where id_informes=$this->id_informes";
			if ($cone->query($consulta)){
				header("Location: formulario.php");
											}
			else{
				header("Location: index.php");
				}
					}
				

public function guardar()
	{

		$conexiondatos = new Conexion();
 $cone = $conexiondatos->con();
 
	echo $consulta = "INSERT INTO informes VALUES($this->nombre_colportor', '$this->libro', '$this->Cliente', '$this->monto', '$this->pedidos', '$this->contacto_misionero', '$this->compras', '$this->viaticos', '$this->campo', '$this->asociado', '$this->fecha', '$this->total') ";
			if ($cone->query($consulta)){
				header("Location: formulario.php");
											}
			else{
				header("Location: index.php");
				}

			}

public function eliminar()
	{

		$conexiondatos = new Conexion();
 $cone = $conexiondatos->con();
	$consulta = "DELETE from informes where id_informes=$this->id_informes";
			if ($cone->query($consulta)){
				header("Location: formulario.php");
											}
			else{
				header("Location: index.php");
				}

}
}


?>