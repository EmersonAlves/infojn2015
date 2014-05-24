<?php

require 'calculo.html';
$AV1= $_POST['AV1'];
$AV2= $_POST['AV2'];
$AV3= $_POST['AV3'];
$media= ($AV1+$AV2+$AV3)/3;
echo "Sua média é: $media <br>";
if ($media<5){

echo ("Reprovado!");
}
else if ($media>=5 && $media<6){
echo ("Prova final.");
}
else {
echo ("Você está aprovado.");
}
?>