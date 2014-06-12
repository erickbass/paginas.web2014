<?php
	require('conexion.php');
			

	$nombre = $_POST["nombrecompleto"];
	$DPI = $_POST["DPI"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];

	
	// echo $DPI;
	// echo $telefono;
	// echo $direccion;
	if($nombre!=""OR $DPI !="" ){
		
	
	 	
	if ($_POST['btncrear']) {

		echo $nombre;
	echo $DPI;
	echo $telefono;
	echo $direccion;

	$query = "INSERT INTO `responsable`(`nombre`, `DPI`, `telefono`, `Direccion`) VALUES ('$nombre','$DPI','$telefono','$direccion')";
		$rs = mysql_query($query);

		
					
					
		header("Location: responsable.php");
		
	}
	}
	ELSE{
	header("Location: responsable.php");
		echo "INGRESE UN NOMBRE O DPI";

	}
	?> 