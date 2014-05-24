<?php 
 $n1 = $_POST['n1'];
 $valor = $n1 * $n1 ;
 if ($n1 >= 50 ){
	echo ' o quadrado do numero ',$valor,'e o numero',$n1,' maior do que 50 ';
}else{
	echo ' o numero ',$n1,' e menor do que 50';
}	
?>