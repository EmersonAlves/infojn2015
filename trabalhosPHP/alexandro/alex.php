<?php
require 'alexandro.php';
$np1 = $_POST['np1'];
$np2 = $_POST['np2'];
$media = ($np1+$np2) / 2;
echo "Sua média é: <b>$media</b> <br>";
?>