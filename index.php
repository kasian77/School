<?php
		$p = 3.1415926535898;
		$r = rand(100, 500)
      ?>
      	<div style="background-color: red; width: <?php echo "{$r}px" ?>; height: <?php echo "{$r}px" ?>; border-radius: 50%;"></div>
	<?php
    		$S = $p * ((int)$r * 2);
	?>
    	<div><?php echo $S ?></div>
