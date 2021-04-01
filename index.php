<?php
session_start();
?>
<html>
	<head>
		<title>PAXE</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<style type="text/css">
			body{
				background-image: url(Imagenes/Principal.jpg);

			}
			footer{
				position: absolute;
				bottom: 10px;
				right: 690px;			}
		</style>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
			<h2 style="color: white">PAXE</h2>
			<p class="lead" style="color: white">Tienda Online de venta y compra de videojuegos.</p>
			<p style="color: white">Para acceder a la tienda tendra que seguir las siguientes instrucciones.</p>
			<p style="color: white"><b>Instrucciones:</b></p>
			<ol>
				<li style="color: white">Debe registrarse en la pestaña de <b>Registro</b> de la barra de arriba.</li>
				<li style="color: white">Tras registrarse debera seleccionar la opción <b>Login</b> para acceder a la página principal.</li>
				<li style="color: white">Para finalizar la sesion, haga click en la opcion salir .</li>
			</ol>
			<br>

	</div>
	</div>
	</div>
	</body>
	<footer style="color: white">PAXE © 2020</footer>
</html>