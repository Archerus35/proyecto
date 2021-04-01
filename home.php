<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>INICIO</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
		<style type="text/css">
			body{
				background-image: url(Imagenes/foto4.jpg);

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
		<h2 style="color: white">¡Bienvenido a la Tienda!</h2>

</div>
</div>
</div>
	</body>
	<footer style="color: white">PAXE © 2020</footer>
</html>