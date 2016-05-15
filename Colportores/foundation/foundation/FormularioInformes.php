@author Eduardo Ortiz 
@version 1.0 
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informes Colportores</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="">
        <h1>Informe de Colportores</h1>

        <div class="medium-6 columns">
          <label>Nombre Completo del Colportor:
           <input type="text" placeholder="Nombre Colportor">
         </label>
       </div>
       <div>
        <p  class="medium-6  columns"><label for="Sexo">Libro O Coleccion:</label><select name="Sexo">
        <option>Masculino</option>
        <option>Femenino</option>
      </select></p>
      </div>
       <div class="medium-6  columns">
      <label>Cliente:
        <input type="text" placeholder="Cliente">
      </label>
     </div>
     <div class="medium-6  columns">
      <label>Monto:
        <input type="text" placeholder="Monto">
      </label>
    </div>
  <div>
    <p class="medium-6  columns"> <label>
     Numero de Pedidos:
    <input type="number" value="0">
    </label>
    </p>
    </div> 

 <div>
    <p class="medium-6  columns"> <label>
     Contactos Misioneros:
    <input type="number" value="0">
    </label>
    </p>
    </div>  
    <div>
    <p class="medium-6  columns"> <label>
     Compras:
    <input type="number" value="0">
    </label>
    </p>
    </div> 

  <div>
        <p  class="medium-6  columns"><label for="Sexo">Viaticos:</label><select name="Sexo">
        <option>-----</option>
        <option>si</option>
        <option>no</option>
      </select></p>
      </div>
<div>
        <p  class="medium-6  columns"><label for="Sexo">Campo:</label><select name="Sexo">
        <option>-----</option>
        <option>Baja California Norte</option>
        <option>Baja California Sur</option>
        <option>Chihuahua</option>
        <option>Tamaulipas</option>
        <option>Guadalajara</option>
        <option>Sonora</option>
        <option>Sinaloa</option>
        <option></option>
      </select></p>
      </div>
      <div>
        <p  class="medium-6  columns"><label for="Sexo">Asociado:</label><select name="Sexo">
        <option>-----</option>
        <option>Baja California Norte</option>
        <option>Baja California Sur</option>
        <option>Chihuahua</option>
        <option>Tamaulipas</option>
        <option>Guadalajara</option>
        <option>Sonora</option>
        <option>Sinaloa</option>
        <option></option>
      </select></p>
      </div>
    <div>
    <p class="medium-6  columns"> <label>
     Total:
    <input type="number" value="0">
    </label>
    </p>
    </div>
    <div class="hidden">
   <p  class="medium-6  columns">
    <label>Fecha</label> 
    <input class="value" type="date"></p>
    </div>
    <button class="success hollow button" href="#">Guardar</button>
    <div class="success callout" data-closable="slide-out-right">
  <p>Rellena Todos los Datos.</p>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
