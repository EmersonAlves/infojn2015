<?php

require 'media.html';
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];
$num5 = $_POST['num5'];
$media = ($num1+$num2+$num3+$num4+$num5)/5;
echo "A média calculada é: $media";

?> 