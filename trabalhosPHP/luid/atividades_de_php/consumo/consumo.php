<?php
	require 'consumo.html';
	$distancia = $_POST ['distancia'];
	$gasto = $_POST ['gasto'];
	$consumo =($distancia/$gasto);
	echo "O consumo do carro é: <b>$consumo</b>";

?>