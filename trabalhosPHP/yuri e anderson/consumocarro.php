<?php
$consumo ;

require 'automovel.php';
$km = $_POST['km'];
$comb = $_POST['comb'];
$consumo = ($km / $comb) ;
echo "Seu consumo foi: $consumo";
?>