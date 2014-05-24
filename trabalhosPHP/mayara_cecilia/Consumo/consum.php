<?php

require 'consumo.html';
	$dist = $_POST['dist'];
	$comb= $_POST['comb'];
	$con= ($dist/$comb);
echo "Consumo do Automóvel: <b>$con Km/L</b> <br>";


?>