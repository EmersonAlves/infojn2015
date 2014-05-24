<?php 
		
require 'meedia.php';
$np1 =$_POST['np1'];
$np2 =$_POST['np2'];
$np3 =$_POST['np3'];
$np4 =$_POST['np4'];
$np5 =$_POST['np5'];
$meedia = ($np1 + $np2 + $np3 + $np4 + $np5) /5;
echo "A media calculada e: <b> $meedia </b>"; 
?>