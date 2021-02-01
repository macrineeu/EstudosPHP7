<?php
	
	require_once "exemplo-01.php";

	//usar once para trazer somente uma vez.

	//require obriga que o arquivo exista (ideal a se usar)

	//include tenta funcionar mesmo sem o arquivo existir

	$resultado = somar (25,20);

	echo $resultado;

?>