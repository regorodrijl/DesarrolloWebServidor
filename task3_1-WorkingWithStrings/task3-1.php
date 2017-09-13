<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 3.1.- Working with Strings</title>
</head>
<body>
	<form name="datos" method="post" action="">
		<fieldset>
			<legend>Datos Personales</legend>
			<label for="nome">Introduce tu Nombre:</label>
			<br><input type="text" name="nome" id="nome">
			<br><label for="apelido">Introduce tu Apellido:</label>
			<br><input type="text" name="apelido" id="apelido">
			<br><input type="submit" class="submit" name="enviar">
		</fieldset>
	</form>
	<?php 
	if (!empty($_POST["nome"]) && !empty($_POST["apelido"])) {
		echo "O nome é: ".$_POST["nome"]."<br>";
		echo "O apelido é: ".$_POST["apelido"]."<br>";
		echo "Your name has ". strlen($_POST["nome"])."characters";
		echo "<br>The first 3 characters of your name are: ".substr($_POST['nome'],0,3);
		echo "<br>The letter A has been found in your surname at the position: ".strpos($_POST['apelido'],'a');
		echo "<br>Your name in capital letters is: ".strtoupper($_POST['nome']);
		echo "<br>Your surname in lowercase is: ".strtolower($_POST['apelido']);
		echo "<br>Your name and surname capitalized: ".strtoupper($_POST['nome'])." ".strtoupper($_POST['apelido']);
		echo "<br>Your name backwards: ".strrev($_POST['nome']);
	}
	?>	
</body>
</html>