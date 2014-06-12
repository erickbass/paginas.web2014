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
		<title>PRINCIPAL</title>
	</head>
	<body>


<?php
		if($_SESSION['valido']==1)
		{ 
			
?>			
		<div class="container-fluid">

			<div id="titulo" class="row-fluid">
						
				<div id="titulo2" class="span2">

					<a href="Principal.php"> <img src="img/logo.png"  alt=""> </a>
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
									<a href="Asignaciongrado.php"> <li>Asignacion Grado</li> </a>
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
					<div class="row-fluid">
						<center><h2 class="page-header">Mision, Vision y Valores </h2></center>
					</div>
					<div class="row-fluid">
						<p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #7d7d7d; text-decoration: none; text-align: justify;"><strong>MISIÓN</strong></p>
						<p style="text-align: justify;">Ofrecer a los padres, madres y tutores un servicio educativo de alta calidad para sus hijos e hijas durante su educación básica y media, donde los estudiantes puedan desarrollar sus potencialidades individuales y prepararse adecuadamente para ser exitosos en sus estudios superiores y en su vida profesional futura, apoyados por un equipo de profesores técnicamente calificados y con la suficiente experiencia y maestría pedagógica para guiarlos adecuadamente.</p>
						<p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #7d7d7d; text-decoration: none; text-align: justify;"><strong>VISIÓN</strong></p>
						<p style="text-align: justify;">Ser un colegio reconocido en la República de Guatemala por la alta calidad humana y académica de sus egresados, por su compromiso en la búsqueda permanente de la excelencia académica y por el profesionalismo y empeño de todo su personal docente que labora para que los estudiantes sean personas felices, ciudadanos respetables y ejemplos en la sociedad.</p>
						<p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #7d7d7d; text-decoration: none; text-align: justify;"><strong>VALORES</strong></p>
						<ul style="text-align: justify;">
						<li><strong>Fe:</strong> basada en la confianza en la sabiduría que llega de Dios.</li>
						<li><strong>Felicidad: </strong>alcanzada con el logro de las metas y la ejecución de los proyectos de vida.</li>
						<li><strong>Buenos modales: </strong>sustentados con la afabilidad, la amabilidad,<strong> </strong>el<strong> </strong>compañerismo, la comprensión, la paciencia, la tolerancia y la modestia.</li>
						<li><strong>Disciplina: </strong>apoyada<strong> </strong>en el respeto, la justicia, la colaboración y el entusiasmo<strong></strong>.</li>
						<li><strong>Presencia equilibrada: </strong>respaldada por la elegancia, el decoro, la sobriedad, el pudor y la decencia.</li>
						<li style="text-align: justify;"><strong>Actitud de vida: </strong>comprometida con la honestidad, la honradez, la fidelidad, la laboriosidad, la perseverancia, la responsabilidad, la solidaridad, el patriotismo y el liderazgo.</li>
						</ul>
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
