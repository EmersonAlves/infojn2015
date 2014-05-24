<?php

	require 'salario.html';
	$nome = $_POST['nome'];
	$salf = $_POST['salf'];
	$tve = $_POST['tve'];
	$salt =($tve*0.15 + $salf);
echo "Nome: <b>$nome </b> <br>";
echo "Salário fixo: <b>$salf </b> <br>";
echo "Salário total: <b> $sal_tot </b> <br>";

?>