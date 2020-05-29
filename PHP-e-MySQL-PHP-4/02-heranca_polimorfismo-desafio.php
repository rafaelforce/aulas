// Crie uma nova classe baseada no nosso primeiro desafio,
// mas essa classe deve sobrescrever o método passar marcha
// e o método reduzir marcha e se necessário alterar a classe
// mãe

#################################################
# Base para exercicio de polimorfismo e heranca #
#################################################

<?php

class Felino
{
	var $km;
	var $rapido = "";

	function Correr( $km_correr )
	{
		$this->km = $km_correr;
	}	

	function velocidadeMaxima( )
	{
		return $this->km;
	}

	function testaVelocidade( )
	{
		$km_velocidade = $this->km;

		if ( $km_velocidade <= 5 )
		{
			$this->rapido = "Nao";
		}
		
		if ( $km_velocidade > 5 )
		{
			$this->rapido = "Sim";	
		}	
	}

	function felinoRapido( )
	{
		return $this->rapido;
	}

}

$gato = new Felino();

$gato->Correr( 10 );
echo "Velocidade do gato eh: " . $gato->velocidadeMaxima() . "\n";
$gato->testaVelocidade( );
echo "O gato eh rapido: " . $gato->felinoRapido() . "\n";

?>
