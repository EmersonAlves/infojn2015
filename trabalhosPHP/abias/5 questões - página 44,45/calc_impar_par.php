<html>
	<body>	
			
		<?php
		
			$i;
			require 'impar_par.php';
			$i = $_POST['i'];
			
			if ($i%2==0){				
			echo  "<b>Número par</b>";
			}
			else {
			echo "<b>Número ímpar </b> ";
			}	
		?>
	</body>
</html>