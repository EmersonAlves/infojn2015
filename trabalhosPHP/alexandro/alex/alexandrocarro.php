<?php
require 'alexcarro.php';
$km = $_POST['km'];
$combustivel = $_POST['combustivel'];
$consumo = ($km/$combustivel) ;
echo " <p align='center'> Seu consumo foi: <b>$consumo</b> km/l<br>";
?>