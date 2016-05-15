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

        <div class="medium-6 columns">
          <label>Matricula:
           <input type="text" placeholder="Matricula">
         </label>
       </div>
       <div class="medium-6  columns">
      <label>Nombres:
        <input type="text" placeholder="Nombres">
      </label>
     </div>
     <div class="medium-6  columns">
      <label>Apellidos:
        <input type="text" placeholder="Apellidos">
      </label>
    </div>
          <div class="medium-6  columns"> 
      <label>Identificacion:
        <input type="text" placeholder="Identificacion">
      </label>
      </div>
     <div class="medium-6  columns">
        <label>Pais:
        <input type="text" placeholder="Pais">
      </label>
    </div>
      <div class="medium-6  columns"> 
      <label>Provincia/Estado:
        <input type="text" placeholder="Provincia/Estado">
      </label>
    </div>
     <div class="medium-6  columns">
      <label>Telefono:
        <input type="text" placeholder="Telefono">
      </label>
    </div>
    <div class="medium-6  columns">
      <label>Correo:
        <input type="text" placeholder="Correo">
      </label>
    </div>
  </div>
    <div>
      <p class="medium-6  columns"><label for="Sexo" >Estado:</label><select name="Sexo">
      <option>Soltero</option>
      <option>Casado</option>
      <option>Viudo</option>
      <option>Divorciado</option>
      <option>Separado</option>
      </select></p>
    </div>   
     <div>
      <p  class="medium-6  columns"><label for="Universidad">Universidad:</label><select name="Universidad">
      <option>Universidad de Navojoa</option>
      </select></p>
    </div>
     <div>
      <p  class="medium-6  columns"><label for="Sexo">Carrera:</label><select name="Sexo">
       <option>Lic. en Teología </option>
      <option>Lic. en Ciencias de la Educación</option>
      <option>Lic. en Contaduría </option>
      <option>Lic. en Enfermería</option>
      <option>Lic. en Ingeniería </option>
      <option>Lic. en Nutrición</option>
      <option>Lic. en Diseño Gráfico</option>
      <option>Lic. en Gastronomía Vegetariana</option>
      <option>Lic. en Pedagogía</option>
      <option>Lic. en Psicología Escolar</option>
      <option>Lic. en Psicología de las Adicciones</option>
      <option>Lic. en Entrenamiento y Físico Deportivo</option>
      </select></p>
    </div> 
    <div>
      <p  class="medium-6  columns"><label for="Sexo">Sexo:</label><select name="Sexo">
      <option>Masculino</option>
      <option>Femenino</option>
      </select></p>
    </div>
     <div>
      <p  class="medium-6  columns"><label for="Tipo de Colportor">Tipo de Colportor:</label><select name="Tipo de Colportor">
      <option>Emprendedor</option>
      <option>Colportor</option>
      </select></p>
    </div>
     <div>
      <p class="medium-6  columns"><label for="Sexo">Campaña:</label><select name="Sexo">
      <option>Verano</option>
      <option>Invierno</option>
      </select></p>
    </div>
    <div>
    <p class="medium-6  columns">
    <label>
      ¿Cuantos Veranos o Inviernos Colportando?
    <input type="number" value="0" class="medium-6  columns">
    </label>
    </p>
    </div>
    <div>
    <p class="medium-6  columns"> <label>
     ¿Cuantas Almas Ganadas?
    <input type="number" value="0">
    </label>
    </p>
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
