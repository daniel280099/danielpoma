<?php 
include 'conexion.php';
$ID = $_GET['ID'];
$nombre = $_GET['nombre'];
$paterno = $_GET['paterno'];
$materno = $_GET['materno'];

echo $nombre;
echo $paterno;
echo $materno;


$up = $con -> query ("UPDATE alumno SET nombre ='$nombre', paterno ='$paterno', materno ='$materno' WHERE ID ='$ID'");


if ($up) {
echo "<script>
location.href ='formulario.php';
</script>";
echo "GUARDADO";

} else{
echo "<script>
location.href ='actualizar.php?id=".$ID."';
</script>";
echo "NO GUARDADO";
}

?>
