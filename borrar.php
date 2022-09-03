<?php 
include 'conexion.php';


$idb = $_REQUEST['ID'];

$del = $con -> query ("DELETE FROM alumno WHERE ID ='$idb'");

if ($del) {
	echo "<script>
	location.href='formulario.php'
	</script>";
}
?>
