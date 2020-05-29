<?php

class Veiculo
{

  /*
   * Essa é a relação dos modificadores que permitem alterar a visibilidade
   * de dados da nossa classe:
   * public
   * private
   * protected
   */
  
  // Quando definimos um atributo por meio da palavra var automaticamente
  // o modificador public é utilizado
  var $placa;
  // Então var $placa pode ser substituído por public $placa :)
  // Atributos public podem ser alterados dentro da classe ou fora da classe
  // (instanciados)
  
  // Já no caso do modificador private o atributo ou método não pode ser alterado
  // fora da classe e é totalmente restrita a classe
  private $cor;
  
  // O modificador protected permite que o atributo ou método seja alterado apenas
  // dentro da classe e em classes filhas
  protected $tipo = 'esporte';
  
  // A forma correta de manipular um atributo private/protected é a seguinte
  public function setCor( $minha_cor )
  {
    $this->cor = $minha_cor;
  }
  
  // A forma correta de exibir dados de atributos private é por meio de métodos
  public function getCor()
  {
    return $this->cor;
  }
  
  public function getTipo()
  {
    return $this->tipo;
  }
  
}

$carro = new Veiculo();
$carro->placa = 'BOS2323';
echo "Qual a placa do carro? " . $carro->placa;
echo "Qual o tipo? " . $carro->getTipo();
$carro->setCor( "Azul" );
echo "Qual a cor? " . $carro->getCor();

class Carro extends Veiculo
{

  public function getTipo()
  {
    return $this->tipo;
  }
  
  public function getCor()
  {
    return $this->cor;
  }
  
}

$novo_carro = new Carro();
echo "Qual o tipo? " . $novo_carro->getTipo();
echo "Qual a cor? " . $novo_carro->getCor();

?>
