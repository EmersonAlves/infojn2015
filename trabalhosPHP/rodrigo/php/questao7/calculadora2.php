<?php

require 'calculadora.html';
$n1= $_POST['n1'];
$n2= $_POST['n2'];
$soma= ($n1+$n2);
$subtracao= ($n1-$n2);
$divisao= ($n1/$n2);
$multiplicacao= ($n1*$n2);
echo "$n1 + $n2 = <b>$soma </b> <br>";
echo "$n1 - $n2 = <b>$subtracao </b> <br>";
echo "$n1 x $n2 = <b>$multiplicacao</b> <br>";
echo "$n1 / $n2 = <b>$divisao </b> <br>";

?>