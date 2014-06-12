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
		<title>Consulta de Notas</title>
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
					<ul class="nav" >
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<h4>Administracion
								<b class="caret"></b></h4>
							</a>
							<ul class="dropdown-menu">
								<a href="inscripcion.php"><li>Inscripcion</li></a>
								<a href="creacionmaestro.php">	<li>Maestros</li> </a>	
								<a href="asignaciongrado.php"> <li>Asignacion Grado</li> </a>
								<a href="consultaalumno.php"> <li>Consultas</li> </a>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<h4>Notas
								<b class="caret"></b></h4>
							</a>
							<ul class="dropdown-menu">
								<a href="ingresonotas.php"> <li>Ingreso</li> </a>
								<a href="consultanotas.php"> <li>Consultar Alumnos</li> </a>
								<a href="vernotasporalumno.php"> <li>Consultar Por Carné</li> </a>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<h4>Usuario
								<b class="caret"></b></h4>
							</a>
							<ul class="dropdown-menu">
								<a href="creacionusuario.php"> <li>Ingreso</li> </a>
								<a href=""> <li>Consulta</li> </a>
							</ul>
						</li>
					</ul>
					</div>
				</div>				
				<div class="span10">
					<div class="row-fluid">
						<h4 class="page-header">Consulta de Notas</h4>
					</div>
					<div class="row-fluid">
						<form class="form-inline">
							<label for="maestro">Maestro: <label name="maestro"> aqui va el nombre del maestro por login</label></label>
						</form>
					</div>
					<div class="row-fluid">
						<div class="span5">
							<form class="form" role="form">
							  <div class="form-group">
							  	<label  class="sr-only" for="a1">
									Grado
								</label>
								<select name="a1">
									<option value="1">1</option> 
								   <option value="2">2</option> 
								</select>
							   
							  </div>
							</form>
						
						</div>  
							<div class="span5">
							<form class="form" role="form">
							  <div class="form-group"> 
								<label class="sr-only" for="a2">
									Seccion
								</label>
												
								<select name="a2">
									<option value="1">Unica</option> 
									<option value="2">2</option> 
									  
								</select>
							  
							  </div>
							 
							</form>
						
						</div>
							
					</div>

					<div class="row-fluid">
						<div class="span5">
							<form class="form" role="form">
							  
							  <div class="form-group">
							   	<label class="sr-only" for="a3">
									Curso
								</label>
											
								<select name="a3">
									<option value="1">Matematica</option> 
							  	    <option value="2">Sociales</option> 
														    
								</select>
							  
							 </div>
							 
							</form>
						</div>
						<div class="span5">
							<form class="form" role="form">
							<div class="form-group">
							 	<label class="sr-only" for="a4">
									Bloque
								</label>
															
								<select name="a4">
									<option value="1">1</option> 
								    <option value="2">1</option> 
															    
								</select>
											  
							 </div>
							</form>
						</div>
							
					</div>

						
							
						<div  id="divboton1" class="row-fluid">
							<button id="boton1" class="btn btn-info"  >Listado</button>

						</div>

					<div   class="row-fluid">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Maestro</th>
								<th>Grado</th>
								<th>Seccion</th>
								
							</tr>
							<tr>
								<td>Maestro 1</td>
								<td>segundo</td>
								<td>B</td>
								
							</tr>
						</thead>

					</table>	
							
						
				</div>
							
						<div  id="divboton2" class="row-fluid">
							<button id="boton2" class="btn btn-info"  >Imprimir</button>
							<button id="boton3"  class="btn btn-info" >Salir</button>

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
