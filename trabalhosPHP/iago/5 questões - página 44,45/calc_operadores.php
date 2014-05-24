<html>
	<body>	
			
		<?php
			$soma;
			$subtracao;
			$divisao;
			$multiplicacao;
			
			require 'operadores.php';
		
			$np1 = $_POST['np1'];
			$np2 = $_POST['np2'];
			
			$soma= $np1 + $np2;
			$subtracacao= $np1 - $np2;
			$multiplicacao= $np1 * $np2;
			$divisao= $np1/$np2;
			
			
			echo  "<b>A soma dos números, é: $soma <br>";
			echo  "<b>A subtração dos números, é: $subtracacao <br>";
			echo  "<b>A multiplicação dos números, é: $multiplicacao <br>";
			echo  "<b>A divisão dos números, é: $divisao <br>";
			
		?>
	</body>
</html>

