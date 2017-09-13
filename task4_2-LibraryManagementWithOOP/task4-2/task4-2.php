<?php 
spl_autoload_register(function ($clase) {
	include './Biblioteca/' .$clase. '.php';
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 4.2. - Library Management with OOP</title>
</head>
<body>
	<?php 
	$libro = new Libro(1,"libro",1990,"Rego",444);
	$libro1 = new Libro(4,"libro",1111,"Pepe",1012055);
	$revista = new Revista(2,"revista",1993,9999,"espirales");
	$dvd =new Dvd(3,"DVD",2000,1,"mkv");
	$libro->imprimirDatos();
	$revista->imprimirDatos();
	$dvd->imprimirDatos();
	$bibilo= new Biblioteca("Biblio1","Direccion Biblio1",11111111,"webdeBiblio1.com");
	$bibilo2= new Biblioteca("Biblio1","Direccion Biblio1",11111111,"webdeBiblio1.com");
	$bibilo3= new Biblioteca("Biblio1","Direccion Biblio1",11111111,"webdeBiblio1.com");
	$bibilo->nuevoDocumento($libro);
	$bibilo->nuevoDocumento($libro1);
	$bibilo->nuevoDocumento($revista);
	$bibilo->nuevoDocumento($dvd);
	$bibilo->listarDocumento();
	$bibilo->listarDocumento("Todo");
	$bibilo->listarDocumento("libro");
	$bibilo->listarDocumento("revista");
	$bibilo->listarDocumento("dvd");
	$bibilo->bajaDocumento(2);
	$bibilo->listarDocumento("todo");
	$bibilo->imprimirDatos();
	echo"<br>";
	$bibilo->getContador();

	?>
</body>
</html>