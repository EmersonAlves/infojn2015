<?php
	require 'index.html';
	$num = $_POST['num'];
	if($num > 50){
		$num *= $num;
		print "<b>$num<b>";
	}
?>