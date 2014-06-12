<?php
	require('conexion.php');
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellidos"];
	$DPI = $_POST["DPI"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];


		$query = "INSERT INTO `profesor`(`nombre`, `apellido`, `telefono`, `Direccion`, `DPI`) VALUES ('$nombre','$apellido','$telefono', '$direccion', '$DPI')";
		$rs = mysql_query($query);
					
			header("Location: CreacionMaestro.php");
	

	?> 