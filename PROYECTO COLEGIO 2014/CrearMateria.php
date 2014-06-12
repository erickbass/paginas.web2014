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
		<title>Crear Materia</title>
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
									<a href="CreacionMaestro.php">	<li>Maestros</li> </a>	
									<a href="AsignacionGrado.php"> <li>Asignacion Grado</li> </a>
									<a href="CrearMateria.php"> <li>Crear Materia</li> </a>

								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<h5>Usuario
									<b class="caret"></b></h5>
								</a>
								<ul class="dropdown-menu">
									<a href="CreacionUsuario.php"> <li>Ingreso</li> </a>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<h5>Notas
									<b class="caret"></b></h5>
								</a>
								<ul class="dropdown-menu">
									<a href="IngresoNotas.php"> <li>Ingreso</li> </a>
									<a href="VerNotas.php"> <li>Consultar</li> </a>
								</ul>
							</li>
						</ul>
						
									
						
							
					</div>
				</div>				
				<div class="span10">
					<form name="materia" method="post" action="CrearMateria1.php">
					<div class="row-fluid">
						<h4 class="page-header">Crear Materia y Unidad</h4>
					</div>
					<div class="row-fluid">
						<div class="span5">
					
								<!-- <form class="form" > -->
									<label for="materia">Materia</label>
									<input name="materia" id="materia" class="small"  type="text"> 
								<!-- </form> -->
								<!-- <input type="submit" value="Crear_Grado" name="boton" class="btn btn-info"> -->
								
						</div>
						<div class="span5">
							<?php
								require('conexion.php');
							?>
							<label  class="sr-only" for="a2">
									Grado
								</label>
								<select name="a2">
									<?php
									
									$result = mysql_query("SELECT * from grado");
									while($row = mysql_fetch_array($result)){ ?>

									<option value="<?php echo $row["idgrado"];?>"><?php echo $row["grado"];?></option>
									<?php 
										}
									?> 
								</select>
								<button name="btncrearmateria" id="boton" class="btn btn-info"  type="submit" value="btncrearmateria">Crear</button>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span5">
								<!-- <form class="form" > -->
									<label for="unidad">Unidad</label>
									<input name="unidad" id="unidad" class="small"  type="text"> 
								<!-- </form> -->
								<button name="btncrearunidad" id="boton" class="btn btn-info" type="submit" value="btncrearunidad">Crear</button>
							</div>
					</div>
					
					
				</div>					
			</div>
							
						
							

						 
		</div>
			
</form>


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
