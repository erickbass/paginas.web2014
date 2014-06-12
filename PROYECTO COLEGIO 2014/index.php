<?php
	session_start();
	if(!isset($_SESSION['valido'])){
		$_SESSION['valido'] = 0;
	if(!isset($_SESSION['user']))
		$_SESSION['user'] = "";
	
		
	}
	$_SESSION['valido'] = 0;
		
?>


<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Colegio Alfa y Omega</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<style type="text/css">
	body {
		background-image:url(img/fondo.jpg); background-repeat: no-repeat; background-size: 150%; 
	}
	</style>
</head>
<body bgcolor="#00424D">
	<table class="tabla1" width="800" cellspacing="0" border="0" align="center">
		<center class="center1" >

			<h1 class="color_fondo"><img class="image1" src="img/logo.png" alt="Educación" title="Educacion" width="80" height="10" border="6">Colegio Cristiano Alfa y Omega</h1>

			<!--img src="img/educacio.gif" alt="Educación" width="816" height="60"-->
		</center>
	</table>
	<br>
	<div class="row-fluid">
			
		<h1 align="center">Registro</h1>
	<form name="login" method="post" action="index1.php">
		<table width="284" heigth="185" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CBCABD">
			<tr>
				<th height="39" colspan="2" scope="col">LOGIN</th>
			</tr>
			<tr>
				<th width="108" height="49" scope="col">USUARIO</th>
			</tr>
			<tr>
				<th width="176" align="center" scope="col">
					<input name="txtuser" type="text" id="txtuser"/>
				</th>
			</tr>
			<tr>
				<th height="51">PASSWORD</th>
			</tr>
			<tr>
				<th align="center">
					<input name="txtpass" type="password" id="txtpass"/>
				</th>
			</tr>
			<tr>
				<td height="46" colspan="2" align="center" >
			 		<button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
				</td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>