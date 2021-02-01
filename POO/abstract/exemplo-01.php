<?php

	interface Veiculo {

		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function TrocarMarcha($marcha);

	}

	abstract class automovel implements Veiculo {

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

	class DelRey extends automovel {

		public function empurrar(){



		}
	}

	$carro = new automovel();
	$carro->acelerar(200);

?>