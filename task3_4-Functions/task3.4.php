<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 3.4.- Functions</title>
</head>
<body>
	<form action="" method="post">
		
		Introduce algo: <input type="text" name="dato"><br>
		Introduce algo: <input type="text" name="string"><br>
		Introduce primer numero: <input type="text" name="numero1"><br>
		Introduce segundo numero: <input type="text" name="numero2"><br>
		Introduce un caracter: <input type="text" name="letra"><br>
		Introduce un numero para saber si es par/impar: <input type="text" name="numero"><br>
		Introduce una frase para pasarla a mayúsculas: <input type="text" name="frase"><br>
		<input type="submit" value="Enviar">
		<?php 
		echo "<br>";
		if(!empty($_POST["dato"]) ){
			funcion1($_POST["dato"]);
		}
		if(!empty($_POST["string"]) ){
			echo funcion2($_POST["string"]);
		}
		if(!empty($_POST["numero1"])&& !empty($_POST["numero2"])){
			echo funcion3($_POST["numero1"],$_POST["numero2"]);
		}
		if(!empty($_POST["letra"]) ){
			funcion4($_POST["letra"]);
		}
		if(!empty($_POST["numero"]) ){
			if (is_numeric($_POST["numero"])) {
				echo funcion5($_POST["numero"]);
			}else echo "Escribe un número";	
		}
		if(!empty($_POST["frase"]) ){
			echo funcion6($_POST["frase"]);
		}
		echo "<br>";
		funcion7();
		?>
		<br>

		
	</form>
	<?php 
	

	echo funcion8();
	//Funciones
	function funcion1($caracter){
		if (is_numeric($caracter)) {//si es numero
			
			for ($i=0; $i < 10; $i++) { 
				if ($caracter == $i) {
					echo "El numero esta entre 0 y 9 es: ".$caracter;
				}
			}if ($caracter<0|| $caracter>10) {
				echo "El numero es menor o mayor: ".$caracter;
			}
		}else //si es texto 
		echo "No es un numero, prueba suerte de nuevo";
	}
	function funcion2($string){
		return "Longitud ".strlen($string);
	}
	function funcion3($n1,$n2){
		return pow($n1,$n2);
	}
	function funcion4($vogal){
		$letra=strtolower($vogal); // convertirla a minusculas 
		switch($letra){ // evaluas que sea vocal 
			case "a":{ echo "Es vocal";break;} 
			case "e":{ echo "Es vocal";break;} 
			case "i":{ echo "Es vocal";break;} 
			case "o":{ echo "Es vocal";break;} 
			case "u":{ echo "Es vocal";break;} 
			default:{ echo "No es vocal. Es numero, caracter raro o consonante";break;}
		}
	}
	function funcion5($numero){
		$es="";
		if (($numero%2)==0) {
			$es = "Es par";
		}else $es="Es impar";
		return $es;
	}
	function funcion6($frase){
		return strtoupper($frase);
	}
	function funcion7(){
		echo date_default_timezone_get();
	}
	function funcion8(){
		echo "Saida do sol: ";
		echo date_sunrise(time(), SUNFUNCS_RET_STRING, ini_get("date.default_latitude"), ini_get("date.default_longitude"), 90, 1);
		echo "<br>Posta do sol: ";
		echo date_sunset(time(), SUNFUNCS_RET_STRING, ini_get("date.default_latitude"), ini_get("date.default_longitude"), 90, 1);
	}

	?>
</body>
</html>