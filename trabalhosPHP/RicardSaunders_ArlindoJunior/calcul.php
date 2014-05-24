<?php
require 'calculo.php';
$v1=$_POST['v1'];
$v2=$_POST['v2'];
$adicao=($v1+$v2);
$subtracao=($v1-$v2);
$multiplicacao=($v1*$v2);
$divisao=($v1/$v2);
echo  " a adicao dos dois numeros e : <b>$adicao<b></br>";
echo  " a subtracao dos dois numeros e : <b>$subtracao<b></br>";
echo  " a multiplicacao dos dois numeros e : <b>$multiplicacao<b></br>";
echo  " a divisao dos dois numeros e : <b>$divisao<b></br>";
?>