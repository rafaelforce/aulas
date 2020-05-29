<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Nesse arquivo vamos testar todas as funções apresentadas em *
 * sala de aula. Por favor testem em seus ambientes de desenv_ *
 * olvimento.                                                  *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// Teste com is_array
// Retorna true se o argumento for array

$my_var = "Texto";
$teste_array = is_array( $my_var );
if ( $teste_array )
{
  echo '$my_var eh um array<br>';  
} 
else
{
  echo '$my_var nao eh um array<br>';
}

$my_var = array();
$teste_array = is_array( $my_var );
if ( $teste_array )
{
  echo '$my_var eh um array<br>';  
} 
else
{
  echo '$my_var nao eh um array<br>';
}

$my_var = array('valor1','valor2');
$teste_array = is_array( $my_var );
if ( $teste_array )
{
  echo '$my_var eh um array<br>';  
} 
else
{
  echo '$my_var nao eh um array<br>';
}

// Teste com in_array
// Retorna true se o primeiro argumento for encontrado no
// segundo argumento (que é um array).

$my_var = array('aluno','evolucao','curso','php');
$teste_array = in_array( 'php', $my_var );
if ( $teste_array )
{
  echo '$my_var contem php<br>';  
} 
else
{
  echo '$my_var nao contem php<br>';
}

$code = 'java';
$my_var = array('aluno','evolucao','curso','php');
$teste_array = in_array( $code, $my_var );
if ( $teste_array )
{
  echo '$my_var contem ' . "$code<br>";  
} 
else
{
  echo '$my_var nao contem ' . "$code<br>";;
}

$code = 'java';
$my_var = array('aluno','evolucao','curso','php',"$code");
$teste_array = in_array( $code, $my_var );
if ( $teste_array )
{
  echo '$my_var contem ' . "$code<br>";  
} 
else
{
  echo '$my_var nao contem ' . "$code<br>";;
}

// Teste com array_keys
// Retorna as chaves (keys) de um array
$code = array(1=>"php", 2=>"java", 3=>"go", 4=>"c");
$code_keys = array_keys($code);

var_export( $code_keys );
echo "<br>";

// Teste com sort
// Ordena os valores de um array sem preservar as posições de chaves/valor
$code = array(0=>"c", 1=>"php", 2=>"java", 3=>"perl", 4=>"go");

// Verificando a estrutura do array $code antes do sort()
var_export( $code );

// Verificando a estrutura do array $code depois do sort()
sort( $code );
var_export( $code );

// Teste com asort
// Ordena os valores de um array preservando as posições de chaves/valor
$code = array(0=>"c", 1=>"php", 2=>"java", 3=>"perl", 4="go");

// Verificando a estrutura do array $code depois do asort()
asort( $code );
var_export( $code );

// Teste com count
// Conta elementos de um array
$code = array(0=>"c", 1=>"php", 2=>"java", 3=>"perl", 4=>"go");
$itens_array = count( $code );
echo "Quantos elementos temos no array " . '$code? ' . $itens_array . "<br>"; 

// Teste com array_merge
// Junta arrays em um único array
$code = array(0=>"c", 1=>"php", 2=>"java", 3=>"perl", 4=>"go");
$shell = array(0=>"power shell", 1=>"bash shell script");

$shell_code = array_merge( $code, $shell );
var_export( $shell_code );

// Teste com explode
// Cria um array a partir de uma string com delimitadores
$texto = "O|rato|roeu|a|roupa|do|rei|de|Roma";

$array_texto = explode( "|", $texto );
var_export( $array_texto );

// Teste com implode
// Junta elementos de um array numa string
$texto_delimitado = implode( "|", $array_texto );
echo "$texto_delimitado<br>";

?>
