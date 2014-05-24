<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<body>
<script>
while(num1 != 0){
var num1 = prompt("Digite uma numero ou zero para sair!!!");

if (num1 > 3){
	alert("Digite 1, 2 ou 3");
} else if (num1==1){
	alert("O sucesso é a soma de pequenos esforços-repetidos sim, e no outro dia também");
} else if (num1==2){
	alert("Uma longa viagem começa com um único passo");
} else if (num1==3){
	alert("Sorte é o que acontece quando a proparaçao encontra a oportunidade");
}
}
</script>

<input type="text" name="verificar">
<input type="submit" value="verificar">
<?php
//exemplo de funcao.
function opcao(){
	echo ("<input type='text' name='op'>");
}

function some($num1,$num2){
	$soma = $num1 + $num2;
	echo $soma;
}

function some5($numero5){
	$numero5 += 5;
	echo $numero5;
}

function some2($numero){
	$numero += 2;
	echo $numero;
}

$n1 = 2;
$n2 = 3;

//some2(6);

echo "<br />";

//some5(90);

function vefifica($n){
$n = $_POST['verificar'];

if ($n % 2 == 0){
	echo "é par";
}else {
	echo "impar<br/>";
}	
}

verifica($_POST['verificar']);

?>

<br/>
valores:<br/>
<input type="text" name="">
Operações:<br />
<input type="submit" value="+">
<input type="submit" value="-">
<input type="submit" value="x">
<input type="submit" value="/">
</body>
</html>




