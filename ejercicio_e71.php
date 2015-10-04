	<!DOCTYPE html>
<html>
	<head>
		<title>E71</title>
	</head>
		<body>
		<?php
				$palabra = "Retamar";
				$valor = strlen($palabra);
				$min_max1 = 0+mt_rand()/mt_getrandmax()*(($valor+1)-0);
				$letra = $palabra[$min_max1-1];  
			?>
			Una letra aleatoria  de la palabra Retamar es: <?php printf($letra)?>
		</body>
</html>