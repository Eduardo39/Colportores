@author Eduardo Ortiz 
@version 1.0 
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Colportores</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="">
        <h1>Registro de Colportores</h1>
        <p><label for="DNI">DNI:</label><input id="DNI" type="'DNI'"></p>
    </div>
    <div>
      <p><label for="Nombre">Nombre:</label><input id="Nombre" type="Nombre"></p>
    </div>
    <div>
      <p><label for="Correo">Correo:</label><input id="Correo" type="Correo"></p>
    </div>
    <div>
      <p><label for="Usuario">Usuario:</label><input id="Usuario" type="Usuario"></p>
    </div>
    <div>
      <p><label for="Contraseña">Contraseña :</label><input id="Contraseña" type="contraseña"></p>
    </div>  
    <div>
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
