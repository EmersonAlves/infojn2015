<html>
	<body>	
			
		<?php
		
			$i;
			require 'potencia_maior_50.php';
			$i = $_POST['i'];
			if ($i > 50){					
			$i= ($i*$i);
								
			echo "<b>Número ao quadrado</b> $i ";
			}
			else 
			echo "<b> Número menor ou igual a 50 </b> ";
			
		?>
	</body>
</html>