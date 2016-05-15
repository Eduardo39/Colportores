@author Eduardo Ortiz 
@version 1.0 
<!DOCTYPE html>
<html>
<head>
	<title>Informes</title>
  <link rel="stylesheet" type="text/css" href="foundation/css/foundation.css">
</head>
<body>
	<h2><span class="fontawesome-lock"></span>Pocisiones</h2>
      <table class="heavyTable" id="mitabla">
      <thead>
      
        
      <div id="boton" class="posicion">
 
<thead>
     <tr>
    <th>Nombre de Colportor</th>
          <th>Libro o Coleccion</th>
          <th>Cliente</th>
          <th>Monto</th>
          <th>Cuantos Pagos</th>
          <th>Contacto Misionero</th>
          <th>Compras Gema</th>
          <th>Campo</th>
          <th>Asosiado</th>
          <th>Viaticos</th>
          <th>Total</th>      
    </tr>
      </thead>
<tbody>
    
<?php
    require_once ('conexion/conexion.php');
    $conexionSacadatos = new Conexion();
    $mysqli = $conexionSacadatos->con();
    $sql ="SELECT matricula_idpaciente, usuario, apellidos,   nombre, fecha_nac, edad, sexo, direccionactual, ciudad, estado, codigopostal, estadocivil, ocupacion, exp_paciente.correo, celular, telcasa, alergia, exp_paciente.id_odontologo  
    FROM exp_paciente, admin 
    where exp_paciente.id_odontologo=admin.id_odontologo";
    $final=$mysqli->query($sql);
    $iniciar=0;
    while($fila=$final->fetch_row()){        
        
    if ($iniciar%2==0){
        $estilo="";
    }else{
        $estilo="active";
    }
        
  echo "<tr class=".$estilo.">";
  echo "<td><small>".$fila[1]."</small></td>
        <td><small>".$fila[0],"&nbsp;<br>|&nbsp;",$fila[3],"<br>&nbsp;",$fila[2]."</small></td>
        <td><small>".$fila[4],"&nbsp;|&nbsp;<em>",$fila[5],"</em"."</small></td>
        <td><small>".$fila[13],"&nbsp;<br>|<em>&nbsp;Cel.",$fila[14],"</em".";<em>&nbsp;<br>| Tel.",$fila[15],"</em"." </small></td>
        <td><small>".$fila[7]."</small></td> 
        <td><small>".$fila[9],"&nbsp;|&nbsp;<em>",$fila[8],"</em"."</small></td> 
        <td><small>".$fila[12]."</small></td>
        <td><small>".$fila[10]."</small></td>
        <td><small>".$fila[16]."</small></td>";
       echo "<td>";
        
    //echo "<a href='index.php?eliminar=$fila[0]' class='btn btn-danger btn-default btn-xs'>Eliminar</a>";  
     
        
      /*  echo'<a   href=Tabsprincipales/editarpaciente.php?eliminar=$fila[0]&name=borrar  class="btn btn-danger btn-default btn-xs">Eliminar</a>';*/
    echo '<a name="editar"  data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modal_paciente/modal_delete_paciente.php?id_paciente='.$fila[0].'" class="modalLoad btn btn-danger btn-default btn-xs">Eliminar</a>';
        
        
      echo '<a name="editar"  data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modal_paciente/modal_paciente.php?id_paciente='.$fila[0].'" class="modalLoad btn btn-success btn-default btn-xs">Editar</a>';
                   
             
        echo "</tr>
          </tbody>";
        $iniciar++;
    }
 
    ?>
    
     </table>   

</div>    
    
        </div>
      </thead>
</body>
</html>