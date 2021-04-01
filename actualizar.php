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
	<form class="container-table-edit" action="procesar_actualizar.php" method="POST">


	<div class="container-table-edit">
		<div class="table_header">Botones</div>


	<br>
		<table border="1">
			<h1 style="color: white">Usuarios</h1>
			<br>
			<br>
		</div>

			<?php
			$id = $_GET["id"];
			$sql="SELECT * from user WHERE id = '$id'";
			$resultado=mysqli_query($con,$sql);

			while($mostrar=mysqli_fetch_array($resultado)){
			?>


			<tr>
				<input type="hidden" name="id" class="table_item" value="<?php echo $mostrar['id']?>">
				<input type="text" class="table_item" value="<?php echo $mostrar['fullname']?>" name="fullname">
				<input type="text" class="table_item" value="<?php echo $mostrar['username']?>" name="username">
				<input type="text" class="table_item" value="<?php echo $mostrar['email']?>" name="email">
				<input type="submit" value="Actualizar">
			</tr>
		</table>
	</div>
</form>
		<?php

	     }
	     ?>

		

</body>
<footer style="color: white">PAXE © 2020</footer>

</html>