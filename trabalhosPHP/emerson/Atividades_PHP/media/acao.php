<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$media = ($n1 + $n2) / 2;
	
	echo '<p align="center">Sua media : <b>',$media,'</b> </p>';
?>