<?php
	$distancia = $_POST['distancia'];
	$combustivel = $_POST['combustivel'];
	$consumo = ($distancia/$combustivel);
	
	echo 'a distancia pergorrida foi ',$distancia,' e o combustivel gasto : ',$combustivel,' economizou ',$consumo;
	
?>