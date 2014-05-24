<?php
 
 require'mediia.php';
 $np1= $_POST['np1'];
 $np2= $_POST['np2'];
 $np3= $_POST['np3'];
 $np4= $_POST['np4'];
 $np5= $_POST['np5'];
 $mediia= ($np1 + $np2 + $np3 + $np4 + $np5) /5;
 
 echo "A media calculada é: <b>$mediia</b> ";
 ?>