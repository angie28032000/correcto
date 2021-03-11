<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link href="../public/css/estiloformulario.css" rel="stylesheet" type="text/css"/>

</head>  
<body>
   <div class="container">
	<div class="header">
                <h1>REGISTRARSE</h1>
	</div>
       <form action="../ajax/registro.php" class="form" method="POST">
		<div class="form-control">
			<label for="username">Usuario</label>
			<input type="text" placeholder="Ejemplo45" id="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">E-mail</label>
			<input type="email" placeholder="Ejemplo45@hotmail.com" id="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Contraseña</label>
			<input type="password" placeholder="Contraseña" id="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Repita Contraseña</label>
			<input type="password" placeholder="Repetir contraseña" id="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<input type="submit" value="Confirmar" class="button">
         <p>Si ya tienes una cuenta <a class="link" href="login.html">Iniciar Sesion</a></p>
	</form>
</div>

    <script src="scripts/validasiones.js" type="text/javascript"></script>
    
</body>
</html>