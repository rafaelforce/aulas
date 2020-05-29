# No sublime crie uma pasta em htdocs com o nome calculadora e adicione como projeto
# Dentro do projeto calculadora cie um pasta chamada classes
# A estrutura ficará da seguinte forma
# calculadora (projeto)
# |
# `- index.html (arquivo)
# `- calcular.php (arquivo)
# | 
# `- classes (diretorio)
#    |
#    `- calculadora.php (arquivo)
#
# Abaixo segue o conteúdo de cada arquivo:

[index.html]
<html>
  <head><title>Calculadora em PHP</title></head>
  <body>
    <form method="post" action="calcular.php">
       <label>
         Primeiro numero:
      </label>
      <input type="text" name="numero1">
      <fieldset style="display: inline;">
      <legend>Operacao</legend>
        <input type="radio" name="operacao" value="somar"><strong>+</strong>
        <input type="radio" name="operacao" value="subtrair"><strong>-</strong>
        <input type="radio" name="operacao" value="multiplicar"><strong>*</strong>
        <input type="radio" name="operacao" value="dividir"><strong>/</strong>
      </fieldset>
      <label>
         Segundo numero:
      </label>
      <input type="text" name="numero2">
      <input type="submit" value="Calcular">
    </form> 
  </body>
</html>
[/index.html]

[calculadora.php]
<?php

Class Calculadora
{
  private $total;
  private $numero1;
  private $numero2;
  
  function __construct()
  {
    $this->total = 0;
    $this->numero1 = 0;
    $this->numero2 = 0;
  }
  
  public function setNumero1($numero)
  {
    $this->numero1 = $numero;
  }
  
  public function setNumero2($numero)
  {
    $this->numero2 = $numero;
  }
  
  public function somar()
  {
    $this->total = $this->numero1 + $this->numero2;
  }
  
  public function subtrair()
  {
    $this->total = $this->numero1 - $this->numero2;
  }

  public function multiplicar()
  {
    $this->total = $this->numero1 * $this->numero2;
  }

  public function dividir()
  {
    $this->total = $this->numero1 / $this->numero2;
  }
  
  public function getTotal()
  {
    return $this->total;
  }
  
}

?>
[/calculadora.php]

[calcular.php]
<?php

require_once 'classes/Calculadora.php';

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();
$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);

switch ( $operacao )
{
  case 'soma':
              $calculadora->somar();
              break;
  case 'subtrair':
              $calculadora->subtrair();
              break;
  case 'multiplicar':
              $calculadora->multiplicar();
              break;
  case 'dividir':
              $calculadora->dividir();
              break;
}

echo $calculadora->getTotal();

?>  
[/calcular.php]
