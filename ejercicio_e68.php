	<!DOCTYPE html>
<html>
	<head>
		<title>E68</title>
	</head>
		<body>
				<?php
				$minimo_1 = -100;
				$maximo_1 = 100;
				$min_max_1 = mt_rand($minimo_1,$maximo_1);
				?>
				
				<?php
				$minimo_2 = 1;
				$maximo_2 = 100;
				$min_max_2 = mt_rand($minimo_2,$maximo_2);
				?>
				
				<?php $tot_sum = $min_max_1 + $min_max_2;?>
				<?php $tot_res = $min_max_1 - $min_max_2;?>
				<?php $tot_mul = $min_max_1 * $min_max_2;?>
				<?php $tot_div = $min_max_1 / $min_max_2;?>
				<?php $tot_rest = $min_max_1 % $min_max_2;?>
				<?php $opuesto = $min_max_1 * -1;?>
				<?php $incremento = $min_max_1 +1;?>
				<?php $decremento = $min_max_1 -1;?>

					<h1>
					<?php printf($min_max_1);?> + <?php printf($min_max_2);?> = <?php printf($tot_sum);?>
					</h1>
					<h1>
					<?php printf($min_max_1);?> - <?php printf($min_max_2);?> = <?php printf($tot_res);?>
					</h1>
					<h1>
					<?php printf($min_max_1);?> * <?php printf($min_max_2);?> = <?php printf($tot_mul);?>
					</h1>
					<h1>
	                <?php printf($min_max_1);?> / <?php printf($min_max_2);?> = <?php printf($tot_div);?>
					</h1>
					<h1>
					<?php printf($min_max_1);?> % <?php printf($min_max_2);?> = <?php printf($tot_rest);?>
					</h1>
					<h1>
					El opuesto de <?php printf($min_max_1);?> es <?php printf($opuesto);?>
					</h1>
					<h1>
					<?php printf($min_max_1);?> ++  vale <?php printf($incremento);?>
					</h1>
					<h1>
					<?php printf($min_max_1);?> --  vale <?php printf($decremento);?>
					</h1>
		</body>
</html>