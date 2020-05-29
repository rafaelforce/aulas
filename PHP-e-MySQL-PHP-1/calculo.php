<?php

  // Tabela de operadores aritméticos
  // +    Adição
  // -    Subtração
  // *    Multiplicação
  // /    Divisão
  // %    Módulo (resto)

  $var1 = 4;
  $var2 = 2;
  
  // Adição
  $resultado = $var1 + $var2;
  echo 'Adição $var1 + $var2: ' . $resultado;
  
  // Ou ainda pode-se imprimir na própria expressão
  // echo 'Adição $var1 + $var2: ' . ($var1 + var2);
  
  // Substração
  $resultado = $var1 - $var2;
  echo '<br>Subtração $var1 - $var2: ' . $resultado;
  
  // Multiplicação
  $resultado = $var1 * $var2;
  echo '<br>Multiplicação $var1 * $var2: ' . $resultado;
  
  // Divisão
  $resultado = $var1 / $var2;
  echo '<br>Multiplicação $var1 / $var2: ' . $resultado;

  // Módulo
  $resultado = $var1 % $var2;
  echo '<br>Módulo $var1 % $var2: ' . $resultado;

  
?>
