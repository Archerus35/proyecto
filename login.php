<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<style type="text/css">
			body{
				background-image: url(Imagenes/foto3.jpg);

			}
			footer{
				position: absolute;
				bottom: 10px;
				right: 690px;			}
		</style>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2 style="color: white">Login</h2>

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username" style="color: white">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password" style="color: white">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
	<footer style="color: white">PAXE © 2020</footer>
</html>