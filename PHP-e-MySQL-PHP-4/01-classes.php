<?php

class Pessoa
{
  
  // Atributos
  var $nome;
  
  // Metodos
  function defineNome( $nomePessoa )
  {
    // $this é uma pseudo variavel que é usuada quando deseja-se
    // acessar um atributo ou um metodo dentro de uma classe
    // Os caracteres -> indicam o que será acessado
    $this->nome = $nomePessoa;
  }
  
  function imprimeNome()
  {
    return $this->nome;
  }
    
}

// Aqui você cria o objeto pessoa a partir da classe Pessoa
$pessoa = new Pessoa();

// Chamamos o método defineNome() para passar para o atributo $nome do 
// objeto $pessoa o valor abaixo
$pessoa->defineNome('Jose');

// Agora por meio do método getNome() vamos imprimir o valor do atributo
// $nome do objeto $pessoa
echo $pessoa->imprimeNome();

?>
