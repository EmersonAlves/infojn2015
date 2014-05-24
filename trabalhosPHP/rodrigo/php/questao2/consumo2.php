<?php

require 'consumo.html';
	$dist = $_POST['dist'];
	$combus= $_POST['combus'];
	$consu= ($dist/$combus);
echo "Consumo do Automovel: <b>$consu Km/L</b> <br>";


?>