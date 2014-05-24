<?php
	
    $avaliacao1 = $_POST['avaliacao1'];
	$avaliacao2 = $_POST['avaliacao2'];
	$avaliacao3 = $_POST['avaliacao3'];
	$mediaav = ($avaliacao1+$avaliacao2+$avaliacao3)/3;
   if ($mediaav >= 6){
  
    echo "voce esta APROVADO com : <b>$mediaav</b> <br>";
     }	
   else {
    echo "voce foi REPROVADO com: <b>$mediaav</b> <br>";
	}
	?>