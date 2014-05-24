<?php
require 'media.php';
$np1 = $_POST['np1'];
$np2 = $_POST['np2'];
$media = ($np1 + $np2) / 2;
<center>echo "Sua media e: <b> $media</b> <br>";</center>
?>