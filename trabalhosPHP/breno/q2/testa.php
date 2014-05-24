<?php
	require 'index.html';
	$num = $_POST['num'];
	if($num%2 == 0) echo "Par";
	else echo "Impar";
?>