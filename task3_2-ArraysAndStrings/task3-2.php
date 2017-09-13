<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 3.2.- Arrays and Strings</title>
</head>
<body>
	<?php
	$array1 = array();
	$information = "Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe";

	$array1 = explode(";", $information);
	echo print_r($array1);

	//echo print_r($array2);

	echo "<pre>";
	print_r($array1);//var_dump($array1); //hace lo mismo
	echo "</pre>";

	?>
	<table border="1">
		<tr>
			<th>City</th>
			<th>Country</th>
			<th>Continent</th>
		</tr>
		
			
			<?php 
			foreach ($array1 as $a2) {
				$a3 = explode(",", $a2);
				echo "<tr><td>".$a3[0]."</td><td>".$a3[1]."<td>".$a3[2]."</td></tr>";
			}
			?>
	</table>

</body>
</html>