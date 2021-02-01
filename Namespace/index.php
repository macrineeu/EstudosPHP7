<?php

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();
	$cad -> setNome("Macrineu");
	$cad -> setEmail("macrineu.developer@gmail.com");
	$cad -> setSenha(123456);

	$cad -> registrarVenda();

?>