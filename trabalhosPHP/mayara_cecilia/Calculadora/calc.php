<?php

require 'cal.html';
$n1= $_POST['n1'];
$n2= $_POST['n2'];
$soma= ($n1+$n2);
$sub= ($n1-$n2);
$div= ($n1/$n2);
$mult= ($n1*$n2);
echo "$n1 + $n2 = <b>$soma </b> <br>";
echo "$n1 - $n2 = <b>$sub </b> <br>";
echo "$n1 x $n2 = <b>$mult</b> <br>";
echo "$n1 / $n2 = <b>$div </b> <br>";

?>