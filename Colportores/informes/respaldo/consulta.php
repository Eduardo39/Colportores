@author Eduardo Ortiz 
@version 1.0 
 <?php
 
if(isset($_POST['enviar'])){
    require_once("../informes.php");
    
      $insertando=new  registroinformes($_POST["id_informes"],$_POST["colportor"], $_POST["libro"], $_POST["cliente"], $_POST["Monto"], $_POST["pedidos"], $_POST["misioneros"], $_POST["compras"], $_POST["viaticos"], $_POST["campo"], $_POST["asociado"], $_POST["fecha"], $_POST["Total"]);  

      $insertando->insertar();
   
    
}