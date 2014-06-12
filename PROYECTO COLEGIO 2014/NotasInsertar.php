<?php

	require('conexion.php');

	$alumno = $_POST["txtID"];
	$bloq = $_POST["unidade"];
	$materia =	$_POST["materia"];
	$nota = $_POST["txtnota"];

	


	for($i=0;$i<count($nota);$i++)
			{
				
				$query = "INSERT INTO `nota`(`Total`, `materia_idmateria`, `unidad_idunidad`, `alumno_idalumno`) VALUES ('$nota[$i]','$materia','$bloq','$alumno[$i]')";
				$rs = mysql_query($query);

				
				header("Location: IngresoNotas.php");
				
			}



?>