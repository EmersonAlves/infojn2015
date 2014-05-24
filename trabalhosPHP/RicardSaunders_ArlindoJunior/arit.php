<?php
// Pagina 45 questao 3
	require ' aritmetica.php ' ;
	$v1=$_POST['v1'];
	$v2=$_POST['v2'];
	$v3=$_POST['v3'];
	$v4=$_POST['v4'];
	$v5=$_POST['v5'];
	$media= ($v1+$v2+$v3+$v4+$v5)/5;
	echo " A sua media calculada e: <b>$media</b> </br>";
?>