<?php

		class Pessoa
		{
			
			public $nome;//ATRIBUTO

			public function falar(){//METÓDO

				return "O meu nome é " .$this->nome;

			}

		}	

		$glaucio = new Pessoa();
		$glaucio->nome = "Glaucio Daniel";
		echo $glaucio->falar();

?>