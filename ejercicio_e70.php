	<!DOCTYPE html>
<html>
	<head>
		<title>E70</title>
	</head>
		<body>
				<?php
				$minimo1 = -1000;
				$maximo1 =  1000;
				$min_max1 = $minimo1+mt_rand()/mt_getrandmax()*($maximo1-$minimo1);
				?>
				
				<?php
				$minimo2 = 1;
				$maximo2 = 10;
				$min_max2 = $minimo2+mt_rand()/mt_getrandmax()*($maximo2-$minimo2);
				?>
				
				<?php $tot_sum = $min_max1 + $min_max2;?>
				<?php $tot_res = $min_max1 - $min_max2;?>
				<?php $tot_mul = $min_max1 * $min_max2;?>
				<?php $tot_div = $min_max1 / $min_max2;?>
				<?php $tot_rest = $min_max1 % $min_max2;?>
				<?php $opuesto = $min_max1 * -1;?>
				<?php $incremento = $min_max1 +1;?>
				<?php $decremento = $min_max1 -1;?>

					<h1>
					<?php printf($min_max1);?> + <?php printf($min_max2);?> = <?php printf($tot_sum);?>
					</h1>
					<h1>
					<?php printf($min_max1);?> - <?php printf($min_max2);?> = <?php printf($tot_res);?>
					</h1>
					<h1>
					<?php printf($min_max1);?> * <?php printf($min_max2);?> = <?php printf($tot_mul);?>
					</h1>
					<h1>
	                <?php printf($min_max1);?> / <?php printf($min_max2);?> = <?php printf($tot_div);?>
					</h1>
					<h1>
					<?php printf($min_max1);?> % <?php printf($min_max2);?> = <?php printf($tot_rest);?>
					</h1>
					<h1>
					El opuesto de <?php printf($min_max1);?> es <?php printf($opuesto);?>
					</h1>
					<h1>
					<?php printf($min_max1);?> ++  vale <?php printf($incremento);?>
					</h1>
					<h1>
					<?php printf($min_max1);?> --  vale <?php printf($decremento);?>
					</h1>
		</body>
</html>