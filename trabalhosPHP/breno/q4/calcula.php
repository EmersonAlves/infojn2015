<?php
	require 'index.html';
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$media = ($n1 + $n2 + $n3)/3;
	echo "<br>A media calculada e: <b>$media<b><br>";
	if($media >= 7) echo "Aprovado";
	else{
		if($media <7 && $media >= 5) echo "Prova final";
		else echo "Reprovado"; 
	}
	
?>