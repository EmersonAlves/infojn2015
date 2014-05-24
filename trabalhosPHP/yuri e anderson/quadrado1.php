<?PHP
REQUIRE"quadrado.php";
$VALOR1=$_POST['VALOR1'];
if($VALOR1 > 50){
	echo $VALOR1 * $VALOR1;
} else{
	echo "Numero menor que 50.";
}
?>