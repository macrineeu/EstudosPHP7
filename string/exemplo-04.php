<?php 

	$frase = "A repetição é a mãe da retenção";

	$palavra = "mãe";

	$q = strpos($frase, "mãe");

	$texto = substr($frase, 0, $q);

	echo $texto;

	var_dump($q);

	$texto2 = substr($frase, $q+ strlen($palavra),strlen($frase));

	echo $texto2;

 ?>