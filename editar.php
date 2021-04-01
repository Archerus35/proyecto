<?php 
	require('php/conexion.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
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

	<div class="container-table-edit">
		<div class="table_header">Botones</div>


	<br>
		<table border="1">
			<h1 style="color: white">Usuarios</h1>
			<br>
			<br>
			<div class="primero">
			<tr>
				<td style="color: white">Nombre</td>
				<td style="color: white">Nombre_usuario</td>
				<td style="color: white">Email</td>


				
			</tr>
		</div>

			<?php
			$sql="SELECT * from user";
			$resultado=mysqli_query($con,$sql);

			while($mostrar=mysqli_fetch_array($resultado)){
			?>


			<tr>
				<div class="table_item"><td style="color: white"><?php echo $mostrar['fullname']?></td></div>
				<div class="table_item"><td style="color: white"><?php echo $mostrar['username']?></td></div>
				<div class="table_item"><td style="color: white"><?php echo $mostrar['email']?></td></div>
			</tr>
			<div class="table_item">
				<a href="actualizar.php?id=<?php echo $mostrar["id"];?>" class="table_item_link">Editar</a> |
				<a href="procesar_eliminar.php?id=<?php echo $mostrar["id"];?>" class="table_item_link">Eliminar</a>

			</div>
		<?php

	     }
	     ?>
		

</body>
<footer style="color: white">PAXE © 2020</footer>

</html>