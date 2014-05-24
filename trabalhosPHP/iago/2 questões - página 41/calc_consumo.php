<html>
	<body>	
			
		<?php
		
			$consumo_medio;
			
			
			require 'consumo.php';
			$np1 = $_POST['np1'];
			$np2 = $_POST['np2'];
					
			$consumo_medio= ($np1/$np2);
								
			echo "<b>Consumo do automóvel: </b> $consumo_medio Km/L<br>";
			
		?>
	</body>
</html>