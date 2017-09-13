<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Web Portal - Includes and requires</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

	<div id="header" class="container">
		<?php include("logo.php"); ?> 
		<?php include("menu.php"); ?> 	
	</div>
	<?php include("pictures.php"); ?> 

	<div id="page">
		<div id="bg1">
			<div id="bg2">
				<div id="bg3">

					<?php include("content.php"); ?> 

					<?php include("sidebar.php"); ?> 

				</div>
			</div>
		</div>
	</div>

	<?php include("footer.php"); ?> 
	<?php 
	/*Write the difference between include, include_once, require and require_once.

	include = include si da un error solo salta la advertencia(E_WARNING) 	permite continuar el script.

	require = igual que include pero si falla da otro error que detiene el script (E_COMPILE_ERROR).

	include_once = incluye y evalua el fichero durante la ejecucion del script, si ya esta incluido devuelve ture y no lo vuelve a incluir.Se usa cuando un mismo fichero se va a incluir varias veces. 

	require_once = similar al require pero se incluye(require) solo una vez el archivo como el include_once.

	*/	
	?>

</body>
</html>
