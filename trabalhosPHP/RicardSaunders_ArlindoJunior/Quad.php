<?php
// Pagina 44 questao 1
	require 'Quadrado.php';
	$vli=$_POST ['vli'];
	if ( $vli > 50 ){
		$Quadrado = ($vli*$vli);
		echo "seu numero ao quadrado e :  <b>$Quadrado</b>";
	}
	else{
		echo "Seu numero e:  <b>$vli</b>";
	}
?>