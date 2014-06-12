<?php
require('conexion.php');

	$carne = $_POST["carne"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellidos"];
	$fnacimiento = $_POST["fechanacimiento"];
	$edad = $_POST["edad"];
	$responsable = $_POST["responsable"];
	$grado = $_POST["grado"];

	// echo $carne;
	// echo $nombre;
	// echo $apellido;
	// echo $fnacimiento;
	// echo $edad;
	// echo $responsable;
	// echo $grado;



		$query = "INSERT INTO `alumno`(`carnet`, `nombre`, `apellido`, `fechanacimiento`, `edad`, `responsable_idpadres`, `asignacion_seccion_curso_idasignacion_seccion`) VALUES ('$carne','$nombre','$apellido','$fnacimiento','$edad','$responsable','$grado')";
		$rs = mysql_query($query);
					
			header("Location: InscripcionAlumno.php");
	

	?> 