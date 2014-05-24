<?php
	require 'quadrado.html';
	$n1 = $_POST ['n1'];
	$valor = ($n1*$n1);
	if ($n1 > 50){	
		echo 'o quadrado de ',$n1,' e: ',$valor; 
	}else{
		echo 'o numero ',$n1,' e menor que 50';
	}
?>