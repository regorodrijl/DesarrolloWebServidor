<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 3.5.- More exercises with functions</title>
</head>
<body>
	<form action="" method="post">
		Introduce un dni: <input type="text" name="dni">
		<input type="submit" value="Enviar">
	</form>
	<?php 
	if (!empty($_POST["dni"])) {
		echo chequear_nif($_POST["dni"]);
	}
	
	function chequear_nif($dni){
		
		if(strlen($dni)<9) {
			return "DNI demasiado corto.";
		}

		$dni = strtoupper($dni);

		$letra = substr($dni, -1, 1);
		$numero = substr($dni, 0, 8);

		$modulo = $numero % 23;
		$letrasValidas = "TRWAGMYFPDXBNJZSQVHLCKE";
		$letraCorrecta = substr($letrasValidas, $modulo, 1);

		if($letraCorrecta!=$letra) {
			return "Letra incorrecta, la letra deber&iacute;a ser la $letraCorrecta.";
		}
		else {
			return "DNI Correcto!!! Fiesta.";
		}


	}


	?>




</body>
</html>