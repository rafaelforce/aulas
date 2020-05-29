<?php
/**
 *
 * Estruturas de repetição: While
 * @author Rafael Rego <rafael.rego@tivit.com.br>
 * @version 1.0
 * @param int 	$num Recebe um numero inteiro
 *
 */
 
$num = 1;

while ( $num <= 10 ) {

  $num = $num + 1;
  // Se $num for igual a 3 entao volto pra condição de loop
  if ( $num == 3 )
  {
    continue;
  }
  
  echo '$num = ' . $num . "<br>";
    
}
  
?>
