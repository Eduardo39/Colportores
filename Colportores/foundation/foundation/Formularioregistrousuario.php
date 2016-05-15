@author Eduardo Ortiz 
@version 1.0 
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="">
        <h1>Registro de Usuarios</h1>
    <div class="medium-6 columns">
          <label>DNI:
            <input type="text" placeholder="DNI">
         </label>
       </div>
       <div class="medium-6  columns">
      <label>Nombre:
        <input type="text" placeholder="Nombre Completo">
      </label>
     </div>
     <div class="medium-6  columns">
      <label>Apellido:
        <input type="text" placeholder="Apellido">
      </label>
     </div>
     <div class="medium-6  columns">
      <label>Correo:
        <input type="text" placeholder="Correo">
      </label>
    </div>
          <div class="medium-6  columns"> 
      <label>Usuario:
        <input type="text" placeholder="Usuario">
      </label>
      </div>
      <div class="medium-6  columns"> 
      <label>Contraseña:
        <input type="text" placeholder="Contraseña">
      </label>
    </div>
   <button class="success hollow button" href="#">Guardar</button>
    <div class="success callout" data-closable="slide-out-right">
  <p>Rellena Todos los Datos.</p>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    </div>  
    </div>
          
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
