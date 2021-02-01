<?php

	abstract class animal {

		public function falar(){

			return "Som";

		}


		public function mover(){

			return "Anda";

		}

	}

	class cachorro extends animal {

		public function falar(){

			return "Late";

		}

	}

	class gato extends animal {

		public function falar(){

			return "Mia";

		}

	}

	class passaro extends animal{

		public function falar(){

			return "Canta";

		}

		public function mover(){

			return "Voa e " . parent::mover();

		}

	}

	$pluto = new cachorro();

	echo $pluto->falar() . "<br>";
	echo $pluto->mover() . "<br>";

	echo "-------------------" . "<br>";

	$garfield = new gato();

	echo $garfield->falar() . "<br>";
	echo $garfield->mover() . "<br>";

	echo "-------------------" . "<br>";

	$canario = new passaro();

	echo $canario->falar() . "<br>";
	echo $canario->mover() . "<br>";

?>