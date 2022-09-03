<?php 
include 'conexion.php';
$ID = $_REQUEST['ID'];

$sel = $con -> query ("SELECT * FROM alumno where ID ='$ID'");
if ($fila = $sel -> fetch_assoc()) {

}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<form action="update.php" method="GET" class="form1">
	
	<div> <input type="hidden" name="ID" value="<?php echo $ID ?> "></div> <!-- hidden : para ocultar los input -->
	<div>
		<h3> Datos de los alumnos</h3>
	</div>
	<br>
	<br>

	<div>
		<label>nombre del alumno</label>
	<input type="text" name="nombre" autofocus required  placeholder="INGRESE EL NOMBRE" value="<?php  echo $fila['NOMBRE']?>">
	</div>
	

	<br><br>
	<div>
		<label>Apellido paterno del alumno</label>
	<input type="text" name="paterno"  required placeholder="INGRESE EL APELLIDO PATERNO" value="<?php  echo $fila['PATERNO']?>">
	
	</div>


	<br><br>
	<div>
	<label>Apellido materno del alumno</label>
	<input type="text" name="materno" required placeholder="INGRESE EL APELLIDO MATERNO" value="<?php  echo $fila['MATERNO']?>">	
	</div>
	
	<br><br>
	<div>
			<input type="submit" name="Enviar xd" class="enviar" value="ACTUALIZAR">
	</div>

</form>
 
 </body>
 </html>
