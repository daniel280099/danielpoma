<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		
		#cambio:hover{
			color: red;
			cursor: pointer;
			font-size: 30px;
			background: skyblue;
			border: 2px dashed grey;
			border-radius: 10px ;

		}


	</style>
</head>
<body>

<?php 

include 'index.php'; 

?>
<div class="container-fluid border border-2 m-4">
<form action="guardar.php" method="get">
	<div class=" d text-center">
		<a id="cambio"> Datos de alumnos </a>
	</div>
<br>
<div class="p-4">
	<label><b>Nombre Alumno </b></label>
	<input type="text" class="form-control" name="nombre" placeholder="nombre Alumno" autofocus required>
</div>
<div class=" p-4">
	<label><b>Apellido Paterno </b></label>
	<input class="form-control"  type="text" name="paterno" required>
</div>
<div class=" p-4">
	<label><b>Apellido Materno </b></label>
	<input class="form-control"  type="text" name="materno" required>
</div>
<input class="form-control btn-success"  type="submit" name="Enviar">

</form>
</div>



</body>
</html>
