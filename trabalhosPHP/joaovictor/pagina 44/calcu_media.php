<?PHP
require "quartatarefa.php";
$NOTA1=$_POST['NOTA1'];
$NOTA2=$_POST['NOTA2'];
$NOTA3=$_POST['NOTA3'];
$MEDIA=$_POST('NOTA1 + NOTA2 + NOTA3')/3;
if (MEDIA < 6){
    echo("VOCE FOI APROVADO");
}
ELSE(MEDIA>=4){
   echo("VOCE ESTA NA PROVA FINAL");
} 
ELSE {
    echo("VOCE ESTA REPROVADO");
}
ECHO ("SUA MEDIA E :<b>$MEDIA<b>.</b>");

?>