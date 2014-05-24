<?php
$n1=$_POST['n1'];
$valor=$n1 % 2;
if ($valor==0){
echo 'o numero ',$n1,' e par';
}else{
echo 'o numero ',$n1,' e impar';
}
?>