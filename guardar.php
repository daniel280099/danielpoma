<?php 
	include 'index.php';
	$nombreAlum= $_GET['nombre'];
	$ApelidoPater=$_GET['paterno'];
	$ApellidoMater = $_GET['materno'];

	$ins = $con -> query ("INSERT INTO alumno(id,nombre,paterno,materno) VALUES ('','$nombreAlum', '$ApelidoPater','$ApellidoMater')");


	if($ins){
		echo "echo logro";
	}
	else{
		echo "falllo";
	}

 ?>
