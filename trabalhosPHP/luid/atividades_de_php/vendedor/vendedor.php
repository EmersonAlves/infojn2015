<?php
	require 'vendedor.html';
	$vendedor = $_POST ['vendedor'];
	$salario = $_POST ['salario'];
	$tvendas =$_POST ['tvendas'];
	$salariof = ($tvendas*0.15 + $salario);
	echo "<b>$vendedor</b> seu salario fixo é: <b>$salario</b> <br> seu salario do final do mês é: <b>$salariof</b><br>";

?>