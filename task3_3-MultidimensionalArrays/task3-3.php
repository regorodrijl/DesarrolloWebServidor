<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 3.3.- Multidimensional Arrays</title>
</head>
<body>
	<?php  
	$datos=[
	"john"=>[
	"email"=>" john@demo.com",
	"website"=>" www.john.com",
	"age"=>"22",
	"password"=>"pass"],
	"Anna"=>[
	"email"=>" anna@demo.com",
	"website"=>" www.anna.com",
	"age"=>"24",
	"password"=>"pass"],
	"Peter"=>[
	"email"=>" peter@demo.com",
	"website"=>" www.peter.com",
	"age"=>"42",
	"password"=>"pass"],
	"Max"=>[
	"email"=>" max@demo.com",
	"website"=>" www.max.com",
	"age"=>"33",
	"password"=>"pass"]
	];
	$contador=0;
	foreach ($datos as $var) {
		if ($contador==0) {
			prev($datos);
		}
		$contador++;
		echo "<ul><li>".key($datos)."</li><ul><li>".$var['email']."</li><li>".$var['website']."</li><li>".$var['age']."</li><li>".$var['password']."</li></ul></li></ul>";
		next($datos);
	}
	echo "<body style='background-color:#008000;'/>";
	?>
	
</body>
</html>