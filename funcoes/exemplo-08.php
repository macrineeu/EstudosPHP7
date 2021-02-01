<?php

	function soma(float ... $valores):float {

		return array_sum($valores);

	}

	echo var_dump(soma(2, 2));

	echo "<br>";

	echo soma(25, 2);

	echo "<br>";

	echo soma(1.1, 2.5);

	echo "<br>";

?>