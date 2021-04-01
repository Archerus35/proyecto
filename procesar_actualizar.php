<?php 
	require('php/conexion.php');

	$id = $_POST['id'];

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];

	$actualizar = "UPDATE user SET fullname='$fullname', username='$username', email='$email' WHERE id='$id'";
	$resultado=mysqli_query($con,$actualizar);


	if ($resultado){
		echo "<script>alert('Actualizacion exitosa'); window.location='usuarios.php';</script>";
	}



?>