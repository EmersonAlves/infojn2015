<?php

require 'pow.html';
$x = $_POST['numero'];
if ($x > 50){ 
$x = ($x*$x);
echo "O número que você digitou ao quadrado é: $x";
}
else {
echo "O número digitado éres: $x";
}
?> 