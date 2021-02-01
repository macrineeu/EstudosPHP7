<?php

	//Configurações em geral


	//Procura Classes
	spl_autoload_register(function($nameClass){

		$dirClass = "class";
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

		//Verificar Existencia do arquivo
		if(file_exists($filename)){

			require_once($filename);

		} 

	});
	
?>