<?php
	require('conexion.php');
	
	$nombre = $_POST["usuario"];
	$password = $_POST["Contrasena"];
	$password2 = $_POST["ConfirmarContrasena"];

	if ($password == $password2) {

		$query = "INSERT INTO `usuario`(`NombreUser`, `Password`) VALUES ('$nombre','$password')";
		$rs = mysql_query($query);
					
			header("Location: Principal.php");
			}

		else{
			echo "Usuario NO Valido";
			}
	



	
?> 