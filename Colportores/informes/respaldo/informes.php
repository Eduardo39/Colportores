@author Eduardo Ortiz 
@version 1.0 
<!DOCTYPE html>
<html>
<head>
	<title>Informes</title>
	<link rel="stylesheet" type="text/css" href="informes.css">


	</head><body>

   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">Close</button>
                   
                </div>
                <div class="ct">
              
                </div>

            </div>
        </div>
    </div>

<!-- fin del modal -->
		<h2><span class="fontawesome-lock"></span>Pocisiones</h2>
      <table class="heavyTable" id="mitabla">
      <thead>
      <div>
      <div id="boton" class="posicion">
        <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Hero Title</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="First Name">Bruce</td>
        <td data-label="Last Name">Wayne</td>
        <td data-label="Hero Title">Batman</td>
      </tr>
      <tr>
        <td data-label="First Name">Peter</td>
        <td data-label="Last Name">Parker</td>
        <td data-label="Hero Title">Spiderman</td>
      </tr>
      <tr>
        <td data-label="First Name">Bruce</td>
        <td data-label="Last Name">Banner</td>
        <td data-label="Hero Title">The Hulk</td>
      </tr>
      <tr>
        <td data-label="First Name">Clark</td>
        <td data-label="Last Name">Kent</td>
        <td data-label="Hero Title">Superman</td>
      </tr>
    </tbody>
</table>
    
		<div>
		<a data-toggle="modal" data-target="#exampleModal"><button type="submit" value="Grabar Informe" >Guardar</button></a>
		</div>

<script type="text/javascript" src="../jquery-latest.min.js"></script>
<script type="text/javascript" src="../bootstrap.min.js"></script>

<script>
			
 $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id_us=' + recipient;
            $.ajax({
                type: "GET",
                url: "formulario.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.ct').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });  
    })







			// $(document).ready(function(){
				//$("#enviar").click(function(){

			/*		$('#exampleModal').on('show.bs.modal', function (event){


					alert("hola");
                var button="Guardar"; 
	           	var colportor = $("#colportor").val();
                var libro = $("#libro").val();
                var cliente=$("#cliente").val();
                var Monto=$("#Monto").val();
                var pedidos=$("#pedidos").val();
                var misioneros=$("#misioneros").val();
                var compras=$("#compras").val();
                var viaticos=$("#viaticos").val();
                var campo=$("#campo").val();
                var asociado=$("#asociado").val();
                var fecha=$("#fecha").val();
                var Total=$("#Total").val();
                var datastring="insert="+ button + "&id_informes" + id_informes  + "&colportor" + colportor+ "&libro" + libro + "&cliente" + cliente + "&Monto" + Monto + "&pedidos" + pedidos + "&misioneros" + misioneros + "&compras" + compras + "&viaticos" + viaticos + "&campo" + campo + "&asociado" + asociado + "&fecha" + fecha + "&Total" + Total;


                $.ajax({
                type:"POST",
                url:"formulario.php",
                data:datastring,
                success: function(resultado) {
                
                   window.location.assign("/Colportores/Colportores/informes.php");
                }
                 error: function(resultado) {
                    
                }
                });
            });
        */
          
	            
</script>



	</body>
</html>
