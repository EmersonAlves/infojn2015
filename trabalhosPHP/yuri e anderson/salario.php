<html>
<head>
<title>questão 1 pag 41</title>
</head>
<body>
	<form method="post" action="salario.php">
				Nome do vendedor:<input type="text" size="20" name="ndv">
				<p></p>
				Numero de vendas:<input type="text" size="20" name="nde">
				<p></p>
				Salario fixo:<input type="text" size="20" name="slf">
				<p></p>
				<input type="submit" value="Calcular">
				
				
			
			</form>
			<?php
			$ndv = $_POST['ndv'];
			$slf = $_POST['slf'];
			$vendas = $slf + 15;
			$comissao = $vendas * 0.15;
			echo 'Seu nome e: '.$ndv.'<br>';
			echo 'Suas vendas: '.$vendas.'<br>';
			echo 'Sua Comissao: '.$comissao.'<br>';
			?>
			</body>
			
			</html>