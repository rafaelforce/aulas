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

  echo '$num = ' . $num . "<br>";
	$num = $num + 1;
  
  // Se $num == 3 entao encerra o loop
  if ( $num == 3 )
  {
    break;
  }
  
}
  
?>
