<?php

	//date_default_timezone_set('America_Sao_Paulo');

	$dt = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));

	$periodo = new DateInterval("P10D");

	$dt -> add($periodo);

	echo $dt -> format("d/m/Y H:i:s");

?>