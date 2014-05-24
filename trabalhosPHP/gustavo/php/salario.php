<?php
	
    $nome=$_POST['nome'];
    $salariof=$_POST['salariof'];
	$totaldv=$_POST['totaldv'];
    $sfinal=($totaldv * 1.15)+ $salariof;
    echo" seu nome e: <b>$nome</b> <br>"; 
	echo"seu salario fixo : <b>$salariof</b> <br>";
	echo"seu total de vendas no mes e :<b>$totaldv</b> <br>";
	echo"esse e o seu salario final :<b>$sfinal</b> <br>";
	?>