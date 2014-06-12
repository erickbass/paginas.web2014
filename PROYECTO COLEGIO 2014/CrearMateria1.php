<?php
	require('conexion.php');
	
	
	$materia = $_POST["materia"];
	$grado = $_POST["a2"];
	$unidad= $_POST["unidad"];
	



	if ($_POST['btncrearmateria']) {

		$query = "INSERT INTO `materia`(`nombre`,`grado_idgrado`) VALUES ('$materia','$grado')";
		$rs = mysql_query($query);
					
					
			header("Location: CrearMateria.php");
		
	}
 
	else if ($_POST['btncrearunidad']) {

		$query = "INSERT INTO `unidad`(`unidad`) VALUES ('$unidad')";
		$rs = mysql_query($query);
					
			header("Location: CrearMateria.php");
		
	}




		// $query = "INSERT INTO `profesor`(`nombre`, `apellido`, `telefono`, `Direccion`, `DPI`) VALUES ('$nombre','$apellido','$telefono', '$direccion', '$DPI')";
		// $rs = mysql_query($query);
					
		// 	header("Location: CreacionMaestro.php");
	

	?> 