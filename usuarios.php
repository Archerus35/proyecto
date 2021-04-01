<?php 
	require('php/conexion.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>USUARIOS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
</head>
<style type="text/css">
			body{
				background-image: url(Imagenes/foto5.jpg);

			}
			footer{
				position: absolute;
				bottom: 10px;
				right: 690px;			}
		</style>
<body>
	<?php include "php/navbar.php"; ?>


	<br>
		<table border="1">
			<h1 style="color: white">Usuarios</h1>
			<br>
			<br>
			<div class="primero">
			<tr>
				<td style="color: white">Id</td>
				<td style="color: white">Nombre</td>
				<td style="color: white">Nombre_usuario</td>
				<td style="color: white">Email</td>
				<button class="boton9 btn btn-primary w-10" onclick="location='editar.php'">Editar</button>


				
			</tr>
		</div>

			<?php
			$sql="SELECT * from user";
			$resultado=mysqli_query($con,$sql);

			while($mostrar=mysqli_fetch_array($resultado)){
			?>


			<tr>
				<td style="color: white"><?php echo $mostrar['id']?></td>
				<td style="color: white"><?php echo $mostrar['fullname']?></td>
				<td style="color: white"><?php echo $mostrar['username']?></td>
				<td style="color: white"><?php echo $mostrar['email']?></td>
			</tr>
		<?php

	     }
	     ?>
		

</body>
<footer style="color: white">PAXE © 2020</footer>

</html>