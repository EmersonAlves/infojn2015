 <?php
 require'notaAV.php';
 $av1= $_POST['av1'];
 $av2= $_POST['av2'];
 $av3= $_POST['av3'];
 $medi= ($av1 + $av2 + $av3) /3;
  echo "Sua media é: <b>$medi</b> <br>";
 	if ($medi >= 6) {
		echo ("Parabéns o aluno foi aprovado.");
		}
	else 
	    {
		echo ("Infelizmente o aluno foi reprovado");
		}
 ?>
