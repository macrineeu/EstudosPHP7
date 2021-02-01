<?php

	$hirarquia = array(
			//Inicio  CEO
			array(

				'nome_cargo' => 'CEO',
				'subordinados' => array(
					//Inicio Diretor Comercial
					array(
						'nome_cargo' => 'Diretor Comercial',
						'subordinados' => array(
							//INICIO GERENTE DE VENDAS

							array(
								'nome_cargo' => 'Gerente de Vendas'
							)

							//TERMINO GERENTE DE VENDAS
						)

					//termino Diretor Comercial
				),

					//INICIO DIRETOR FINANCEIRO
					array(
						'nome_cargo' => 'Diretor Financeiro'
					)
					//TERMINO DIRETOR FINANCEIRO

			)
		),


			//Termino CEO

	);

	function exibe($cargos){

		$html = "<ul>";

			foreach ($cargos as $cargo) {
				
				$html .= "<li>";

				$html .= $cargo['nome_cargo'];

				if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

					$html .= exibe($cargo['subordinados']);

				}

				$html .= "</li>";

			}

		$html .= "</ul>";

		return $html;

	}

	echo exibe($hirarquia);

?>