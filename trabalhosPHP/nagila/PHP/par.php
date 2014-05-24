<?php

require 'par.html';
$nume = $_POST['nume'];
if ($nume%2==0){ 
echo "O número digitado é par";
}
else {
echo "O número digitado é ímpar";
}
?> 