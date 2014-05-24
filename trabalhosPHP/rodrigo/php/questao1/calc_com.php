<?php



require 'new10.html';
	$nome = $_POST['nome'];
	$sf = $_POST['sf'];
	$totv = $_POST['totv'];
	$sal_tot =($totv*0.15 + $sf);
echo "Seu nome é: <b>$nome </b> <br>";
echo "Seu Salário fixo: <b>$sf </b> <br>";
echo "Seu Salário total é: <b> $sal_tot </b> <br>";

?>