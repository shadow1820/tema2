	<!DOCTYPE html>
<html>
	<head>
		<title>E72</title>
	</head>
		<body>
			<?php
				$letras1 = "abcdefghijklmnñopqrstuvwxyz";

				$valor1 = strlen($letras1);
				$min_max1 = 0+mt_rand()/mt_getrandmax()*(($valor1+1)-0);
				$letra1 = $letras1[$min_max1-1];
				$letra_correcta1 = utf8_decode($letra1);

				$letras2 = "abcdefghijklmnñopqrstuvwxyz";

				$valor2 = strlen($letras2);
				$min_max2 = 0+mt_rand()/mt_getrandmax()*(($valor2+1)-0);
				$letra2 = $letras2[$min_max2-1];
				$letra_correcta2 = utf8_decode($letra2);

				$letras3 = "abcdefghijklmnñopqrstuvwxyz";

				$valor3 = strlen($letras3);
				$min_max3 = 0+mt_rand()/mt_getrandmax()*(($valor3+1)-0);
				$letra3 = $letras3[$min_max3-1];
				$letra_correcta3 = utf8_decode($letra3);  
			?>
			Una palabra aleatoria con tres letras es: 
			<b>
			<?php echo $letra_correcta1;?>
			<?php echo $letra_correcta2;?>
			<?php echo $letra_correcta3;?>
			</b>			
		</body>
</html>