<?php

  // Caso o valor do meu teste encontrar verdadeiro
  // então o bloco é executado
  
  switch ( $opcao )
  {
    case '1':
      echo 'A opção 1 foi selecionada';
      break;
    case '2':
      echo 'A opção 2 foi selecionada';
      break;
    case '3':
      echo 'A opção 3 foi selecionada';
      break;
    default:
      echo 'Nem 1, nem 2 e nem 3, então o bloco default é executado.'
      break;
    }
    
?>
