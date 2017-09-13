<!DOCTYPE html>
<html>
<head>
	<title>Task 4.1 - Working with Classes and Subclasses</title>
</head>
<body>
	<?php 
	spl_autoload_register(function ($clase) {
		include './clases/' . strtolower($clase) . '.php';

	});

	$proba = new Soporte(1,"hola",12.5);
	$proba->imprimirCaracteristicas();
	$cinta = new Cinta(2,"Cinta de musica",3,"3:31","vinilo");
	$cinta->imprimirCaracteristicas();
	$dvd=new Dvd(3,"Pacific Rim",4000,"es","wmv");
	$dvd->imprimirCaracteristicas();
	$juego= new Juego(4,"The Witcher 3: Wild Hunt",59.95,"Todas las plataformas",1,4);
	$juego->imprimirCaracteristicas();
	$juego->imprimirJugador();
	?>
</body>
</html>