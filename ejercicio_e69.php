	<!DOCTYPE html>
<html>
	<head>
		<title>E69</title>
	</head>
		<body>
				<?php
				$min_max = mt_rand()/mt_getrandmax();
				?>
				
				<?php
				$minimo = -1000;
				$maximo =  1000;
				$min_max2 = $minimo+mt_rand()/mt_getrandmax()*($maximo-$minimo);
				$truncado_milesima = round($min_max2-0.0005,3);
				$truncado_decenas = round($min_max2-5,-1);
				?>

					<h1>
						Numero real aleatorio entre 0 y 1: <?php printf($min_max);?>
					</h1>
					<h1>
						Numero real aleatorio entre -1000 y 1000: <?php printf($min_max2);?>
					</h1>
					<h1>
						Segundo numero truncado a las milesimas: <?php printf($truncado_milesima);?>
					</h1>
					<h1>
						Segundo numero truncado a las decenas: <?php printf($truncado_decenas);?>
					</h1>
		</body>
</html>