<?php 
	$vendedor = $_POST['vendedor'];
	$salario = $_POST['salario'];
	$totalv = $_POST['totalv'];
	$mais = (0.15*$totalv);
	$salariofinal = ($salario + $mais);
	echo ' o vendedor : ',$vendedor,'</br> com o salario fixo ',$salario,' e ganho a mais  : ',$mais,' e ficou com salario final : ',$salariofinal; 
?>