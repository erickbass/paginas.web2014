<?php 
		session_start();
	if(!isset($_SESSION['valido'])){
		$_SESSION['valido'] = 0;
	if(!isset($_SESSION['user']))
		$_SESSION['user'] = "";
	
		
	}
		require('conexion.php');
		$nombre=$_POST["txtuser"];
		$password=$_POST["txtpass"];

		$query= "SELECT NombreUser, Password FROM usuario WHERE NombreUser='$nombre' AND Password='$password'";
		$rs=mysql_query($query);
		$row=mysql_fetch_object($rs);//convierte a objeto 
		$nr=mysql_num_rows($rs); //mysql_num_rows nos da el numero de registros. 

		if ($nr == 1) {
			$_SESSION['valido'] =1;
			$_SESSION['user'] = "$nombre";
			header("Location: Principal.php");
			# code...
		}

		else if ($nr <= 0) {
			$_SESSION['valido'] =0;
			
			?>
			<h4>Usuario NO Valido</h4>
			<div class="row-fluid">
					<a href="index.php"><button class="btn btn-warning">VOLVER</button</a>
			</div>
			<?php
			
			# code...
		}


 ?>