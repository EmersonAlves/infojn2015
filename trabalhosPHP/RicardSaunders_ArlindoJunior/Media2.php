
	<?php
		
		require 'Media.php';
		$n1 = $_POST ['n1'];
		$n2 = $_POST ['n2'];
		$n3 = $_POST ['n3'];
		$media = ($n1+$n2+$n3)/3;
		echo "sua media e: <b>$media</b> <br>";
		if ($media > 6){
		echo " O aluno foi aprovado";
		}
	    if ($media < 6){
		echo " O aluno precisa fazer a prova final";
		}
		if ($media < 6){
		echo " O aluno foi reprovado ";
		}
	?>
