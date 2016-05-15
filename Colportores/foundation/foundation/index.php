@author Eduardo Ortiz 
@version 1.0 
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	
   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div id="login">
<h1>Iniciar Sesion</h1>


		<form class="medium-6  columns" id="loginfrom" method="POST" action="validacion.php">
		
		<fieldset>
			Usuario</br>
			<input type="text" name="usuario" placeholder="usuario">
			Contraseña<br/>
			<input type="password" name="pass" aria-describedby="passwordHelpText">
			
		<button class="success hollow button" href="#">Entrar</button>
  <div class="success callout" data-closable="slide-out-right">
  <p>!..Bienvenido..!</p>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
</div>

</fieldset>
  </form>
			
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
			
</body>
</html>