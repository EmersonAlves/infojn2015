<?php

require 'calcmedia.html';
$av1= $_POST['av1'];
$av2= $_POST['av2'];
$av3= $_POST['av3'];
$media= ($av1+$av2+$av3)/3;
echo "Sua média é: $media <br>";
if ($media<4){

echo ("Você esta REPROVADO!");
}
else if ($media>=4 && $media<7){
echo ("Você está em PROVA FINAL.");
}
else {
echo ("Você está APROVADO.");
}
?>