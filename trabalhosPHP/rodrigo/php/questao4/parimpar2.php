<?php

require 'parimpar.html';
$x = $_POST['numero'];
if ($x%2==0){ 
echo "O número que você digitou é par";
}
else {
echo "O número digitado é ímpar";
}
?> 