<?php

	interface Veiculo {

		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function TrocarMarcha($marcha);

	}

	class civic implements Veiculo {

		public function acelerar($velocidade){

			echo "O veiculo acelerou até" . $velocidade . "km/h";

		}

		public function frenar($velocidade) {

			echo "O veiculo frenou até" . $velocidade . "km/h";

		}

		public function TrocarMarcha($marcha){

			echo "O veiculo engatou a marcha" . " ". $marcha;

		}

	}

	$carro = new civic();

	$carro->TrocarMarcha(1);


?>