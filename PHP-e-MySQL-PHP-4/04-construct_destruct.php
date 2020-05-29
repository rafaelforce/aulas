<?php

/*
 *
 * Cada bloco PHP deve ser executado individualmente
 * Então você pode criar vários arquivos pra cada bloco como versões
 * ou você pode copiar o primeiro bloco de código teste em seguida o segundo bloco ...
 *
 */

?>

<?php

/*
 *
 * Exemplo de Construtor sem parametro
 *
 */

Class Pessoa
{
  
  private $nome;
  
  function __construct()
  {
    echo "Construtor iniciado<br>";
  }

}

// Construct pode ser usado para iniciarmos nosso objeto
// com algumas informações inicias...
$pessoa = new Pessoa();

?>

<?php

/*
 *
 * Exemplo de Construtor(args) com parametro
 *
 */

Class Pessoa
{
  
  private $nome;
  
  function __construct($param_nome)
  {
    echo "Construtor iniciado<br>";
    $this->nome = $param_nome;
  }
  
  function Correr()
  {
    echo $this->nome . " correndo.<br>";
  }

}

// Construct pode ser usado para iniciarmos nosso objeto
// com algumas informações inicias...
$pessoa = new Pessoa('Rafael');
$pessoa->Correr();

?>

<?php

/*
 *
 * Exemplo de Destrutor(void)
 *
 */

Class Pessoa
{
  
  private $nome;
  
  function __construct($param_nome)
  {
    echo "Construtor iniciado<br>";
    $this->nome = $param_nome;
  }
  
  function __destruct()
  {
    echo "Objeto removido<br>";
  }
  
  function Correr()
  {
    echo $this->nome . " correndo.<br>";
  }

}

// Construct pode ser usado para iniciarmos nosso objeto
// com algumas informações inicias...
$pessoa = new Pessoa('Rafael');
$pessoa->Correr();

?>
