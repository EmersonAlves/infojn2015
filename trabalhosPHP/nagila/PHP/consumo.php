<?php
$distancia= $_POST['distancia'];
$combustivel= $_POST['combustivel'];
$consumo= ($distancia + $combustivel)/2;
echo "seu consumo e:<b>$consumo</b> <br>";
?>