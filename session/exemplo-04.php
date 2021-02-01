<?php
	
	session_id('75nf2ipngfsln7ghvc12rucdge');

	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

?>