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
		<title>INSCRIPCION</title>
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
									<a href="ConsultaAlumno.php"> <li>Consultas</li> </a>

								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<h5>Usuario
									<b class="caret"></b></h5>
								</a>
								<ul class="dropdown-menu">
									<a href="CreacionUsuario.php"> <li>Ingreso</li> </a>
									<a href=""> <li>Consulta</li> </a>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<h5>Notas
									<b class="caret"></b></h5>
								</a>
								<ul class="dropdown-menu">
									<a href="IngresoNotas.php"> <li>Ingreso</li> </a>
									<a href="VerNotas.php"> <li>Consultar Notas</li> </a>
									
								</ul>
							</li>
						</ul>
						
									
						
							
					</div>
				</div>				
				
				<div class="span10">
					<form name="Createlogin" method="post" action="VerNotas1.php">
				<?php
								require('conexion.php');
							?>
					
				

						
				<div   class="row-fluid">
		<div class="rowfluid">		
		<table class="table table-hover">
			<tr >
				<td colspan="6" ><center><h3>LISTADO DE ALUMNOS</h3></center></td><!--COLSPAN QUIERE DECIR QUE ESA FILA VA A OCUPAR LO MISMO QUE 4 COLUMNAS-->
			</tr>
			<tr>
				<td>Carnet</td>
				<td>Alumno</td>
				<td>Apellido</td>
				<td>Grado</td>
				<td>Seccion</td>
				<td>Materia</td>
				<td>Unidad</td>
				<td>Nota</td>
				
			</tr>
			<?php

				$GRADO = $_POST["grado"];
				$SECCION = $_POST["seccion"];
				$MATERIA = $_POST["materia"];
				$BLOQUE = $_POST["unidade"];

				$result = mysql_query("SELECT  N.total AS NOTAA, U.unidad AS UNIDADA,M.nombre AS MATERIAA, A.idalumno AS NO,A.CARNET AS CARNETA, A.NOMBRE AS NOMBREA, A.APELLIDO AS APELLIDOA, G.GRADO AS GRADOA, S.NOMBRE AS SECCIONA FROM alumno A
										INNER JOIN asignacion_seccion_curso AC ON AC.IDASIGNACION_SECCION = A.asignacion_seccion_curso_idasignacion_seccion
										INNER JOIN seccion S ON S.IDSECCION = AC.SECCION_IDSECCION 
										INNER JOIN grado G ON G.IDGRADO = AC.GRADO_IDGRADO 
										INNER JOIN nota N ON A.IDALUMNO = N.ALUMNO_IDALUMNO
										INNER JOIN materia M ON M.IDMATERIA = N.MATERIA_IDMATERIA
										INNER JOIN unidad U ON U.IDUNIDAD = N.UNIDAD_IDUNIDAD
										WHERE G.idgrado = $GRADO AND S.idseccion = $SECCION AND M.idmateria = $MATERIA AND U.idunidad = $BLOQUE;");
					
				while($row = mysql_fetch_array($result)){ ?>
				<tr class="">
				
					<td><?php echo $row["CARNETA"];?></td>
					<td><?php echo $row["NOMBREA"];?></td>
					<td><?php echo $row["APELLIDOA"];?></td>
					<td><?php echo $row["GRADOA"];?></td>
					<td><?php echo $row["SECCIONA"];?></td>
					<td><?php echo $row["MATERIAA"];?></td>
					<td><?php echo $row["UNIDADA"];?></td>
					<td><?php echo $row["NOTAA"];?></td>
				</tr>
			<?php 
				}
			?>
		</table>
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
if($_SESSION['valido']==0)
		echo "ACCESO RESTRINGIDO";

?>   			
	</form>  
		</body>

	</html>
<!--  -->