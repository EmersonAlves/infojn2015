<?php
// Pagina 41 questao 1
	require 'Salario.php';
	$nomedovendedor= $_POST['nomedovendedor'];
	$salariofixo= $_POST['salariofixo'];
	$vendas= $_POST['vendas'];
	$salariof= ($vendas*0.15)+$salariofixo;
	echo " O nome do vendedor : <b>$nomedovendedor</b><br>" ;
	echo "seu salario fixo : <b>$salariofixo</b><br>";
	echo "salario final : <b>$salariof</b><br>";
?>  