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
		<title>Asignar Grado y Maestro</title>
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
					<form name="Createlogin" method="post" action="AsignacionGrado1.php">
					<div class="row-fluid">
						<h4 class="page-header">Crear Grado y Seccion</h4>
					</div>
					<div class="row-fluid">
						<div class="span5">
					
								<!-- <form class="form" > -->
									<label for="creargrado">Crear Grado</label>
									<input name="creargrado1" id="creargrado1" class="small"  type="text"> 
								<!-- </form> -->
								<!-- <input type="submit" value="Crear_Grado" name="boton" class="btn btn-info"> -->
								<button name="btncreargrado" id="boton" class="btn btn-info"  type="submit" value="btncreargrado">Crear</button>
						</div>
						<div class="span5">
								<!-- <form class="form" > -->
									<label for="crearseccion">Crear Seccion</label>
									<input name="crearseccion" id="crearseccion" class="small"  type="text"> 
								<!-- </form> -->
								<button name="btncrearseccion" id="boton" class="btn btn-info" type="submit" value="btncrearseccion">Crear</button>
							</div>
					</div>
					<br>
					
					<div class="row-fluid">
						<h4 class="page-header">Asignacion Grados</h4>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<?php
								require('conexion.php');
							?>
							<!-- <form class="form" role="form"> -->
							  <div class="form-group">
							  	<label  class="sr-only" for="a1">
									Maestro
								</label>
								<select name="a1">
									<?php
									$result = mysql_query("SELECT * from profesor");
									while($row = mysql_fetch_array($result)){ ?>

									<option value="<?php echo $row["idprofesor"];?>"><?php echo $row["nombre"];?></option>
									<?php 
										}
									?> 
								</select>
							   
							  </div>	
							 
							 
							<!-- </form> -->
						</div>
						<div class="span3">
							<!-- <form class="form" role="form"> -->
							  <div class="form-group">
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
							   
							  </div>
							  
							<!-- </form> -->
						</div>
						<div class="span3">
							<!-- <form class="form" role="form"> -->
							  <div class="form-group"> 
								<label class="sr-only" for="a3">
									Seccion
								</label>
												
								<select name="a3">
									<?php
									$result = mysql_query("SELECT * from seccion");
									while($row = mysql_fetch_array($result)){ ?>

									<option value="<?php echo $row["idseccion"];?>"><?php echo $row["nombre"];?></option>
									<?php 
										}
									?> 
									  
								</select>
							  
							  </div>
							 
							<!-- </form> -->
						</div>
					</div>
					<div  id="divbotonlist" class="row-fluid">
							<button name="btnasignar" id="boton" class="btn btn-info" type="submit" value="btnasignar">Asignar</button>
							
						
				</div>
				<br>
				<div   class="row-fluid">
		<div class="rowfluid">		
		<table class="table table-hover">
			<tr >
				<td colspan="3" ><center><h3>MAESTROS ASIGNADOS</h3></center></td><!--COLSPAN QUIERE DECIR QUE ESA FILA VA A OCUPAR LO MISMO QUE 4 COLUMNAS-->
			</tr>
			<tr>
				<td>Maestro</td>
				<td>Grado</td>
				<td>Seccion</td>
			</tr>
			<?php
				$result = mysql_query("SELECT P.NOMBRE AS PROFESOR, S.NOMBRE AS SECCION, G.GRADO AS GRADO FROM asignacion_seccion_curso A
										INNER JOIN profesor P ON P.IDPROFESOR=A.PROFESOR_IDPROFESOR
										INNER JOIN seccion S ON S.IDSECCION=A.SECCION_IDSECCION
										INNER JOIN grado G ON G.IDGRADO=A.GRADO_IDGRADO;");
				while($row = mysql_fetch_array($result)){ ?>
				<tr class="">
					<td><?php echo $row["PROFESOR"];?></td>
					<td><?php echo $row["GRADO"];?></td>
					<td><?php echo $row["SECCION"];?></td>
				</tr>
			<?php 
				}
			?>
		</table>
		</div>	
							
						
				</div>
				<div  id="divboton1" class="row-fluid">
					<button id="boton1" class="btn btn-info"  >Asignar</button>
					<button id="boton2"  class="btn btn-info" >Cancelar</button>				
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
