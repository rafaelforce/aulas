<?php

/**
 *
 * Estruturas de repetição: For
 * @author Rafael Rego <rafael.rego@tivit.com.br>
 * @version 1.0
 * @param int 	$index Recebe um numero inteiro
 *
 */
 
// o For inicia o loop recebendo como parâmetros a variável de controle
// a condição de teste e a iteração, normalmente submetida a variável
// de controle

// A inicialização dessa variável acontece dentro da estrutura do for
// $index = 11;

// For com incremento
for ( $index = 0; $index < 10; $index = $index + 1 )
{

  echo '$index = ' . $index . '<br>';
  
}

// For com decremento
for ( $index = 10; $index > 0; $index = $index - 1 )
{

  echo '$index = ' . $index . '<br>';
  
}

?>
