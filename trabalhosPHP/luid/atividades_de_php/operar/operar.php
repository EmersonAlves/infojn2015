<?php
	$n1 = $_POST ['n1'];
	$n2 = $_POST ['n2'];
	$a = $n1+$n2;
	$s = $n1-$n2;
	$m = $n1*$n2;
	$d = $n1/$n2;
	echo 'a adicao: ',$a,'<br>a subtracao: ',$s,'<br>a multiplicacao: ',$m,'<br>a divisao: ',$d;
?>