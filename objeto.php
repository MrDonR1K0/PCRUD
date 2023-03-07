<?php

	include("conexionABD.php");
	$conexion = conectar();
	
	$sql = "select * from objeto";
	$consulta = mysqli_query($conexion, $sql);

	$fila = mysqli_fetch_array($consulta);

 ?>
 
 <!DOCTYPE html>
<html lang="en">
	<head>
		<title> ALUMNOS </title>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<link href = "css/style.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	</head>
	<body>
		
		<div class = "contenedor-mt-5">
			<div class = "fila">
				<div class = "colum-md-3">
					<h1>Ingrese datos</h1>
					<form action = "crear.php" method = "POST">
					
						<input type="text" class="form-control mb-3" name="codAlumno" palceholder="Código de Alumno">
						<input type="text" class="form-control mb-3" name="dni" palceholder="DNI">
						<input type="text" class="form-control mb-3" name="nombre" palceholder="Nombre">
						<input type="text" class="form-control mb-3" name="apellidos" palceholder="Apellidos">
						
						<input type="submit" class="btn btn-primary" value="Enviar" >
						
					</form>
					
				</div>
					
				<div class="col-md-8">
					<table class="table">
						<thead class="table-success table-striped">
							<tr>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($colum = mysqli_fetch_array($consulta)){}
							?>
							
							<th></th>
							<th></th>
						</tbody>
					</table>
				</div>
			</div>
		</div>
			
	</body>
</html>