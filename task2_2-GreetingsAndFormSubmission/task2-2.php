<!DOCTYPE html>
<html>
<head>
	<title>Task 2.2. - Greetings and form submission</title>
</head>
<body>
	<?php 

	$t = getdate();
	//$hora =date("H");
	echo $t['hours'];

	if (8 < $t && $t < 13) {
		echo "Good morning";
	}elseif (13 < $t && $t < 15) {
		echo "Enjoy your meal";
	}elseif (15 < $t && $t  < 17) {
		echo "Coffee Time";
	}else
	echo  "<br>Good night";
	?>

	<form name="formulario" method="post" action="">
		<fieldset>
			<legend>Pedido</legend>
			<p>
				<p><select name="option">
					<option value="cocacola" >Coca Cola</option>
					<option value="pepsi">Pepsi Cola</option>
					<option value="fanta">Fanta Naranja</option>
					<option value="trina">Trina Manzana</option>
				</select></p>
				<p><select name="canti">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
				</select></p>
			</p>
			<p>
				lista Precios:
				<ul><li>Coca Cola ( 1 )</li>
					<li>Pepsi Cola (0,80 €)</li>
					<li>Fanta Naranja (0,90 €)</li>
					<li>Trina Manzana (1,10 €)</li>
				</ul>
			</p>
			<input type="number" name="cantidad" value="1"/>
			<input type="submit" class="submit" name="enviar" value="Calcular" />
		</fieldset>
	</form>
	<?php 
	
	if(!empty($_POST["option"]) ){
		$precio;
		switch ($_POST["option"]) {
			case 'cocacola':
			$precio=1;
			$prod="Coca Cola";
			break;
			case 'pepsi':
			$precio=0.8;
			$prod="Pepsi Cola";
			break;
			case 'fanta':
			$precio=0.9;
			$prod="Fanta Naranja";
			break; 
			case 'trina':
			$precio=1.1;
			$prod="Trina Manzana";
			break;
		}
		echo "Precio ".$precio;

		echo "<br>You requested ".$_POST["canti"]." ".$prod." bottles. Total amount:".$precio*$_POST["canti"];

		echo "<br>Total Cantidad= ".$precio*$_POST["cantidad"];

	}
	?>
	
</body>
</html>