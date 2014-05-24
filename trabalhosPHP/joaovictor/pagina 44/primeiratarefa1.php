<?PHP
REQUIRE"primeiratarefa.php";
$PRIMEIRO_VALOR1=$_POST['PRIMEIRO_VALOR1'];
if($PRIMEIRO_VALOR1 > 50){
	echo $PRIMEIRO_VALOR1 * $PRIMEIRO_VALOR1;
} else{
	echo "Numero menor que 50.";
}
?>