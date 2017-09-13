<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 3.7 - Working with arrays and methods.</title>
</head>
<body>
	<?php 
	$array30 = array();
	for ($i=0; $i < 30 ; $i++) { 
		$array30[$i]= rand(0,20);
	}

	//var_dump($array30);

	$arraySuper = ["Batman","Superman","Krusty","Bob","Mel","Barney"];
	echo "<br>";
	echo array_pop($arraySuper);
	echo "<br>";
	echo array_search("Superman",$arraySuper);
	echo "<br>";
	echo array_push($arraySuper, "Carl", "Lenny", "Burns" , "Lisa");
	echo "<br>";
	sort($arraySuper);
	var_dump($arraySuper);
	echo "<br>";
	var_dump(array_splice($arraySuper,2,4));
	echo "<br>";
	array_unshift($arraySuper, "Manzana", "Melón", "Sandía");
	var_dump($arraySuper);
	echo "<br>";
	$micopia=array_slice ($arraySuper,2,4);
	var_dump($micopia);
	echo "<br>";
	echo array_push($micopia, "Monitor");
	echo "<br>";
	$Tercero = array_merge($arraySuper,$micopia);
	var_dump($Tercero);

	?>

</body>
</html>