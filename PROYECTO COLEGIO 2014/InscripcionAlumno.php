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
		<title>Inscripcion</title>
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
					<form name="Createlogin" method="post" action="inscripcionAlumno1.php">
					<div class="row-fluid">
						<h4 class="page-header">Datos del Alumno</h4>
					</div>
					<div class="row-fluid">
						<div class="span5">
								<label for="carne">Carné</label>
								<input id="carne" name="carne" class="large" placeholder="Carné" type="text"> 
						
						</div>  
						
							
					</div>

					<div class="row-fluid">
						<div class="span5">
								<label for="nombre">Nombre</label>
								<input id="nombre" name="nombre" class="large" placeholder="Nombres" type="text"> 
						
						</div>
						<div class="span5">
								<label for="Apellidos">Apellidos</label>
								<input id="apellidos" name="apellidos" placeholder="Apellidos" class="large"  type="text"> 
						
							
						</div>

					</div>
					<div class="row-fluid">
						<div class="span5">
								<label for="fechanacimiento">Fecha de Nacimiento</label>
								<input id="fechanacimiento" name="fechanacimiento" class="large"  type="text" placeholder="AAAA-MM-DD">
								<br> 
						</div>
						<div class="span5">							
								<label for="edad">Edad</label>
								<input id="edad" name="edad" class="large" placeholder="Edad" type="text"> 
						</div>

					</div>
					<div class="row-fluid">
							<?php
								require('conexion.php');
							?>
						<div class="span3">
							  <div class="form-group">
							  	<label  class="sr-only" for="a2">
									DPI responsable
								</label>
								<select id="responsable" name="responsable">
									<?php
									$result = mysql_query("SELECT idpadres, DPI FROM responsable");
									while($row = mysql_fetch_array($result)){ ?>

									<option value="<?php echo $row["idpadres"];?>"><?php echo $row["DPI"];?></option>
									<?php 
										}
									?> 
								</select>
							   
							  </div>
							  
						</div>
						
							
						<div class="span3">
							  <div class="form-group">
							  	<label  class="sr-only" for="a2">
									Grado y Sección
								</label>
								<select id="grado" name="grado">
									<?php
									$result = mysql_query("SELECT A.idasignacion_seccion AS ID, S.NOMBRE AS SECCION, G.GRADO AS GRADO FROM asignacion_seccion_curso A
										INNER JOIN profesor P ON P.IDPROFESOR=A.PROFESOR_IDPROFESOR
										INNER JOIN seccion S ON S.IDSECCION=A.SECCION_IDSECCION
										INNER JOIN grado G ON G.IDGRADO=A.GRADO_IDGRADO;");
									while($row = mysql_fetch_array($result)){ ?>

									<option value="<?php echo $row["ID"];?>"><?php echo $row["GRADO"]." ".$row["SECCION"];?></option>
									<?php 
										}
									?> 
								</select>
							   
							  </div>
							  
						</div>
						
					</div>
					<br>
					
						
						
					<div  id="divboton1" class="row-fluid">
						<button id="boton1" class="btn btn-info"  >Guardar</button>
						<a href="InscripcionAlumno.php">	<button id="boton3"  class="btn btn-info" >Cancelar</button></a>
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
