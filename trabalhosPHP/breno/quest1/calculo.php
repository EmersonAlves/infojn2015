<?php
	require 'index.html';
	$nome = $_POST['nome'];
	$sal = $_POST['sal'];
	$vendas = $_POST['vendas'];
	$sal_final = $vendas * 0.15 + $sal;
	echo "Vendedor: <b>$nome</b><br>Salario fixo: R$ <b>$sal</b><br>Salario final: R$ <b>$sal_final</b>";
?>