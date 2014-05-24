<?php
require 'salario.php';
$Nome=$_POST['Nome'];
$Salario Fixo=$_POST['SalarioFixo'];
$Vendas mes=$_POST['Vendasmes'];
$Calcular=($Salario Fixo + $Vendas mes+(15/100));

echo "Nome é:"<b>$Nome</b>;

echo "Salario do mes e:<b>$SalarioFixo</b>";

echo "salario no final do mes:<b>$Calcular</b>";


echo "Vendas do mes e: <b>$Vendas mes</b>";
?>
