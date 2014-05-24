<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$n4 = $_POST['n4'];
	$n5 = $_POST['n5'];
	$media = ($n1 + $n2 + $n3 + $n4 + $n5) / 5;
	
	echo '<p align="center">Sua media : <b>',$media,'</b> </p>';
?>