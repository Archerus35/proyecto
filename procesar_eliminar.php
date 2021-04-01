<?php 
	require('php/conexion.php');

	$id = $_GET['id'];


	$eliminar = "DELETE FROM user WHERE id='$id'";
	$resultado=mysqli_query($con,$eliminar);


	if ($resultado){
		echo "<script>alert('Eliminacion exitosa'); window.location='usuarios.php';</script>";
	}



?>