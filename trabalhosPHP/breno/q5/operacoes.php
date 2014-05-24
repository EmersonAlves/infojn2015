<?php
	require 'index.html';
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$soma = ($n1 + $n2);
	$sub = ($n1 - $n2);
	$div = ($n1 / $n2);
	$multi = ($n1 * $n2);
	echo "Resultados: <br>Soma: <b>$soma<b><br>Subtracao: <b>$sub<b><br>Divisao: <b>$div<b><br>Multiplicacao: <b>$multi<b>";
?>