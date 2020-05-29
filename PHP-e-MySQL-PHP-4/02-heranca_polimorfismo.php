<?php

// Vamos criar uma classe de acordo com nosso exemplo
// Classe mãe ou superclasse
class Felino
{

  var $mamifero = 'sim';
  
  function Correr()
  {
    echo "Correr como felino";
  }
  
}

// Classe filha ou subclasse
// A classe Leao vai herdar atributos e metodos da classe mãe Felino
class Leao extends Felino
{
}

// Vamos instanciar a classe Leao criando o objeto $leao
$leao = new Leao();

// Vamos acessar o atributo $mamifero da classe Leao por meio do 
// objeto $leao e do operador ->
echo $leao->mamifero  "<br>";

// Vamos acessar o metodo Correr da classe Leao por meio do 
// objeto $leao e do operador ->
$leao->Correr();

// Observe como o uso de classes nos permite economizar código ...
class Gato extends Felino
{

  // Polimorfismo (estamos sobrescrevendo o método da classe mãe)
  function Correr()
  {
    echo "Eu corro a 50km/h no máximo =^.^=";
  }
  
}

// O objeto $gato herda atributos e métodos da classe mãe Felino, mas
// possui sua própria versão do método Correr()
$gato = new Gato();
echo "Sou mamífero? " . $gato->$mamifero . "<br>";
$gato->Correr();

?>
