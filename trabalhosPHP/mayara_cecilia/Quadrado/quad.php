<?php

require 'quadrado.html';
$num = $_POST['num'];
if ($num > 50){ 
$num = ($num*$num);
echo "O número ao quadrado é: $num";
}
else {
echo "O número digitado é: $num";
}
?> 