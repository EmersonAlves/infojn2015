<?php
	require 'index.html';
	$dist = $_POST['dist'];
	$lit = $_POST['lit'];
	$consumo = $dist / $lit;
	echo "Consumo: <b>$consumo</b> K/L<br>";
?>