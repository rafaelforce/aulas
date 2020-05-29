<?php
/**
 *
 * Estruturas de repetição: While
 * @author Rafael Rego <rafael.rego@tivit.com.br>
 * @version 1.0
 * @param int 	$num Recebe um numero inteiro
 *
 */

// O do while, diferente do while, executa o bloco de código ao menos uma vez
// depois disso a condição de loop é verificada e caso true o bloco voltar a ser
// executado e caso false o bloco de código não é executado e o loop se encerra

$num = 11;

do
{
  // No minimo $num = 0 sera escrito com esse codigo
  echo '$num = ' . $num . '<br>';
  
  // Incremento de $num
  $num = $num + 1;

  // Condicao pra interrupcao do loop
} while ( $num < 10 )

?>
