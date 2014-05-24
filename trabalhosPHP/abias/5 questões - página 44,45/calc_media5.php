<html>
	<body>	
			
		<?php
			
			
			require 'media5.php';
			$media;
			$np1 = $_POST['np1'];
			$np2 = $_POST['np2'];
			$np3 = $_POST['np3'];
			$np4 = $_POST['np4'];
			$np5 = $_POST['np5'];
			$media = ($np1+$np2+$np3)/3;
			echo  "<b>A média calculada é: </b>$media <br>";
			
		?>
	</body>
</html>

