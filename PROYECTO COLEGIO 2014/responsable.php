<?php
	session_start();
	if(!isset($_SESSION['valido'])){
		$_SESSION['valido'] = 0;
	if(!isset($_SESSION['user']))
		$_SESSION['user'] = "";
	
		
	}
		
?>


<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device‐width, initial‐scale=1.0">

		<link rel="stylesheet" href="css/bootstrap.css"></link>
		<link rel="stylesheet" href="css/bootstrap-responsive.css"></link>

		<link rel="stylesheet" href="css/estilos.css"></link>
		<title>Responsable</title>
	</head>
	<body>


<?php
		if($_SESSION['valido']==1)
		{ 
			
?>			
		<div class="container-fluid">

			<div id="titulo" class="row-fluid">
						
				<div id="titulo2" class="span2">

					<a href="principal.php"> <img src="img/logo.png"  alt=""> </a>
				</div>
				<div id="contenidotitulo"  class="span10">
					
					<h1  >Colegio Cristiano Mixto Alfa y Omega</h1>	
							
				</div>	
					
			</div>
			
			<br />
			
			<div class="row-fluid">
				<div id="menu"  class="span2" >
					<div class="container-fluid" >
						<div class="row-fluid">
							<a href="index.php"><button class="btn btn-warning">Cerrar Sesion<br> <b><?php echo $_SESSION['user'] ?></b></button</a>
						</div>	
								
						<ul class="nav" >
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<h5>Administracion
									<b class="caret"></b></h5>
								</a>
								<ul class="dropdown-menu">
									<a href="InscripcionAlumno.php"><li>Inscripcion</li></a>
									<a href="responsable.php"> <li>Responsable</li> </a>
									<a href="creacionmaestro.php">	<li>Maestros</li> </a>	
									<a href="asignaciongrado.php"> <li>Asignacion Grado</li> </a>
									<a href="CrearMateria.php"> <li>Crear Materia</li> </a>

								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<h5>Usuario
									<b class="caret"></b></h5>
								</a>
								<ul class="dropdown-menu">
									<a href="creacionusuario.php"> <li>Ingreso</li> </a>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<h5>Notas
									<b class="caret"></b></h5>
								</a>
								<ul class="dropdown-menu">
									<a href="ingresonotas.php"> <li>Ingreso</li> </a>
									<a href="VerNotas.php"> <li>Consultar</li> </a>
								</ul>
							</li>
						</ul>
						
									
						
							
					</div>
				</div>				
				<div class="span10">
					
					<div class="row-fluid">
						<h4 class="page-header">Datos Del Responsable</h4>
					</div>
					
					<div class="row-fluid">
						<div class="span10">
							<form name="Responsable" method="post" action="responsable1.php">
							<!-- <form class="form" > -->
								<label for="nombrecompleto">Nombre Completo</label>
								<input id="nombrecompleto" name="nombrecompleto" class="large"  type="text"> 
							<!-- </form> -->
						
						</div>
						
					</div>
					<div class="row-fluid">
						<div class="span5">
							<!-- <form class="form" > -->
								<label for="DPI">DPI</label>
								<input id="DPI" name="DPI" class="large"  type="text"> 
							<!-- </form> -->
						
						</div>
						<div class="span5">
							<!-- <form class="form" > -->
								<label for="telefono">Telefono</label>
								<input id="telefono" name="telefono" class="large"  type="text"> 
							<!-- </form> -->
						
							
						</div>

					</div>	
					<div class="row-fluid">
						<div class="span10">
							<!-- <form class="form" > -->
								<label for="direccion">Direccion</label>
								<input id="direccion" name="direccion" class="large"  type="text"> 
							<!-- </form> -->
						
						</div>
						
					</div>	
						
						
					<div  id="divboton1" class="row-fluid">
						<button name="btncrear" id="boton" class="btn btn-info"  type="submit" value="btncrear">Crear</button>
					</form>	
						<a href="responsable.php">	<button id="boton3"  class="btn btn-info" >Cancelar</button></a>
					</div>		
				</div>
					
				
					
			</div>
					
			



					
			</div>
				

				
				
							

						
							
						
							

						 
		



			<script type="text/javascript" src="js/jquery.js"></script>
   			 <script type="text/javascript" src="js/bootstrap.js"></script>
   			 <script type="text/javascript" src="js/dropdown.js"></script>
   			  <script type="text/javascript">
   			  	$(".dropdown-toggle").dropdown();
   			  </script>

<?php }
if($_SESSION['valido']==0){
?>
			<h4>Usuario NO Valido</h4>
			<div class="row-fluid">
					<a href="index.php"><button class="btn btn-warning">VOLVER</button</a>
			</div>
<?php
}	
?>    			  
		</body>

	</html>
<!--  -->
