<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$media = ($n1 + $n2 + $n3) / 3;
	if (($media > 0)&&($media <= 3)){
	echo'sua media e: ',$media,'<br>esta reprovado';
	}else if(($media > 3)&&($media<6)){
	echo'sua media e: ',$media,'<br>esta na prova final';
	}else{
	echo'sua media e: ',$media,'<br>esta aprovado';
	}
	
?>