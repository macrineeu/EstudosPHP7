<?php 

	$nome = "Matheus";

	function teste() {

		global $nome;
		echo $nome;

	}

	function teste2() {

		$nome = "Davi";
		echo $nome . " " . "agora no teste dois";

	}

	teste();

	teste2();

?>