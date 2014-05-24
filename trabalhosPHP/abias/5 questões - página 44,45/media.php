<html>
	<body>	
			
		<?php
			
			
			require 'calc_media.php';
			$media;
			$np1 = $_POST['np1'];
			$np2 = $_POST['np2'];
			$np3 = $_POST['np3'];
			$media = ($np1+$np2+$np3)/3;
			echo  "<b>Sua média é </b>$media <br>";
			if($media >= 6 ){				
			echo  "<b>Você está APROVADO ;] </b>";
			}
			else {
			echo "<b>Você está REPROVADO ;[ </b> ";
			}	
		?>
	</body>
</html>

