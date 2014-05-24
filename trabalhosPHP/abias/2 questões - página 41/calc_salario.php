<html>
	<body>	
			
		<?php
		
			$comissao;
			$salario_total;
			
			require 'salario.php';
			$np1 = $_POST['np1'];
			$np2 = $_POST['np2'];
			$np3 = $_POST['np3'];
			
			$comissao= ($np3*0.15);
			$salario_total= ($comissao + $np2);
			
			
			echo "<b>Nome:</b> $np1 <br>";
			echo "<b>Salário fixo:</b> $np2 <br>";
			echo "<b>Seu salário total é de:</b> $salario_total ";
		?>
	</body>
</html>