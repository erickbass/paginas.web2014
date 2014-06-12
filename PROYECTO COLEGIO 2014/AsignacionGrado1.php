<?php
	require('conexion.php');
	$grado = $_POST["creargrado1"];
	$seccion = $_POST["crearseccion"];
	$maestro = $_POST["a1"];
	$grado1 = $_POST["a2"];
	$seccion1 = $_POST["a3"];

echo $grado;

	if ($_POST['btncreargrado']) {

		$query = "INSERT INTO `grado`(`grado`) VALUES ('$grado')";
		$rs = mysql_query($query);
					
					
			header("Location: AsignacionGrado.php");
		
	}
 
	else if ($_POST['btncrearseccion']) {

		$query = "INSERT INTO `seccion`(`nombre`) VALUES ('$seccion')";
		$rs = mysql_query($query);
					
			header("Location: AsignacionGrado.php");
		
	}

	else if ($_POST['btnasignar']) {

		$query = "INSERT INTO `asignacion_seccion_curso`(`seccion_idseccion`, `grado_idgrado`, `profesor_idprofesor`) VALUES ('$seccion1','$grado1','$maestro')";
		$rs = mysql_query($query);
					
			header("Location: AsignacionGrado.php");
		
	}


		// $query = "INSERT INTO `profesor`(`nombre`, `apellido`, `telefono`, `Direccion`, `DPI`) VALUES ('$nombre','$apellido','$telefono', '$direccion', '$DPI')";
		// $rs = mysql_query($query);
					
		// 	header("Location: CreacionMaestro.php");
	

	?> 