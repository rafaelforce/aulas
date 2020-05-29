<?php

// Array multidimensional para armazenar o nome da fruta e estacao

// Inicializo meu array multidimensional
$frutas[1]['nome'] = "Banana";
$frutas[1]['estacao'] = "Primavera";
$frutas[2]['nome'] = "Morango";
$frutas[2]['estacao'] = "Inverno";
$frutas[3]['nome'] = "Manga";
$frutas[3]['estacao'] = "Verao";
$frutas[4]['nome'] = "Caqui";
$frutas[5]['estacao'] = "Outuno";

// Obtendo dados do array
foreach ( $frutas as $fruta )
{

  // Obtendo chaves do array e valor de cada chave
  foreach ( $fruta as $chave => $valor )
  {
    echo ucfirst($chave) . " da fruta é " . $valor . "<br>";
  }

}

// Array de uma dimensão apenas e percorrendo com foreach

//Inicializo o array de 4 indices
$objetos[1] = "Celular";
$objetos[2] = "Relogio";
$objetos[3] = "Carro";
$objetos[4] = "Notebook";

foreach ( $objetos as $objeto )
{
  echo "O objeto é " . $objeto . "<br>";
}

// Lembre-se que sempre que precisar entender a estrutura de uma variavel
// utilize a função var_dump()

?>
