@author Eduardo Ortiz 
@version 1.0 
<?php
include_once('config.php');
require_once('informes.php');
 class registroinformes 
{
  

	public  $id_informes;
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

function __construct($id_informes, $nombre_colportor, $libro, $Cliente, $monto, $pedidos, $contacto_misionero, $compras, $viaticos, $campo, $asociado, $fecha, $total)
	{
	$this->id_informes=$id_informes;
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
  
    
    $conexionSacadatos = new Conexion();
   	$linkSacadatos = $conexionSacadatos->con();
          
        
	}  
        public function insertar(){
            
           global $mysqli;
			$consulta = "INSERT INTO informes VALUES('', '$this->nombre_colportor', '$this->libro', '$this->Cliente', '$this->monto', '$this->pedidos', '$this->contacto_misionero', '$this->compras', '$this->viaticos', '$this->campo', '$this->asociado', '$this->fecha', '$this->total') ";
			if ($mysqli->query($consulta)){                
				header("location: informes.php");
            }else{
				header("location: informes.php");
				}
            
        }