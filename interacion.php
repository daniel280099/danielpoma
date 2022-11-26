<?php 

$numeros= $_POST['number'];

var_dump(count($numeros) );

$d = count($numeros);
for ($i=count($numeros) ; $i >0; $i--) { 
	// code...
	
	echo $numeros[($d-1)]."valor${i}<br>";
	 $d--;
}


?>