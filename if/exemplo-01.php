<?php

	$qualSuaIdade = 15;

	$idadeCriança = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	//se  for verdade
	if ($qualSuaIdade < $idadeCriança) {
		
		echo "é uma criança";

	} else if($qualSuaIdade < $idadeMaior){

		echo "Adolescente";

	} else if ($qualSuaIdade < $idadeMelhor) {
		
		echo"Adulto";
	} else {

		echo "Idoso";

	}

	echo "<br/>";

	echo ($qualSuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";


?>