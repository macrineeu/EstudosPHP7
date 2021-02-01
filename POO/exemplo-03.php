<?php

	class Documento {

		private $numero;

		public function getNumero(){

			return $this->numero;

		}

		public function setNumero($numero){

			$resultado = Documento::validarCPF($numero);

			if ($resultado === false) {

				throw new Exception("CPF INVÁLIDO", 1);
				

			}

			$this ->numero = $numero;

		}

		public static function validarCPF($cpf){

			//Verifica se um numero foi informado
		if(empty($cpf)) return false;

		//Verifica se o número de digitos informados é igual a 11
		if (strlen($cpf) != 11) {

			return false;

		}

		//Verifica se nenhuma das sequencias invalidas abaixo 
		//foi digitado. Caso afirmativo, retorna falso
		else if ($cpf == '11111111111' || 
				$cpf == '22222222222' || 
				$cpf == '33333333333' ||
				$cpf == '44444444444' ||
				$cpf == '55555555555' ||
				$cpf == '66666666666' ||
				$cpf == '77777777777' ||
				$cpf == '88888888888' ||
				$cpf == '99999999999' ||
				$cpf == '00000000000') {

			return false;
		}
		//Calcula os digitos verificadores para verificar se o CPF é valido
		}

	}

	$cpf = new Documento();
	$cpf ->setNumero("506841845");

	echo "O CPF informado é: " .$cpf->getNumero();
	

?>