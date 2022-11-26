
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Examen</title>
</head>
<body>
	<form method="POST" action="interacion.php">
		<label>Datos asignado</label>
		<br>

		<?php
		 $a = 15;
			for ($i=1; $i <= $a ; $i++) { 
				// code...

				echo "<label>numero${i}</label> <br>".
				"<input type='text' id='' name='number[]'  style='' /> <br> ";
			}


		?>
		<button>Enviar</button>

	</form>

</body>
</html>