<?php include 'index.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class=" form-control">
		<form class="form-control p-4" method="GET" action="guardar.php">
			<h3>Datos del Alumno</h3>
			<hr>
			<div class="p-3">
				<label>Nombre del Alumno</label>
				<input class="form-control" type="text" name="nombre" autofocus required placeholder="Nombre Alumno">
			</div>
			<div class="p-3">
				<label>Apellido Paterno del Alumno</label>
				<input class="form-control" type="text" name="paterno" autofocus required placeholder="Apellido Paterno Alumno">
			</div>
			<div class="p-3">
				<label>Apellido Materno del Alumno</label>
				<input class="form-control" type="text" name="materno" autofocus required placeholder="Apellido Materno Alumno">
			</div>
			<div>
				<input type="submit" class="form-control btn-success" name="">
			</div>
			
		</form>		
	</div>
	<div class="container text-center p-3 m-1 border border-2">
		<table class="table text-center">
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Editar</th>
			<th>Eliminar</th>
			<?php 
			$sel = $con -> query ("SELECT * FROM alumno"); while ($fila = $sel -> fetch_assoc()){

			?>
			<tr>
				<td> <?php echo $fila ['id']; ?></td>
				<td> <?php echo $fila ['nombre']; ?></td>
				<td> <?php echo $fila ['paterno']; ?></td>
				<td> <?php echo $fila ['materno']; ?></td>
				<td><a href="actualizar.php?id =<?php echo $fila ['id'] ?>">Editar</a> </td>
				<td><a href="borrar.php?id =<?php echo $fila ['id'] ?>">Eliminar</a> </td>
			</tr>
		<?php }?>
		</table>

	</div>

</body>
</html>
