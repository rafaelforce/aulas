<?php
/**
 *
 * @author Rafael Rego
 * @version 1.0
 *
 */

/**
 *
 * Objetivo: Percorrer o array @news utilizando estruturas
 * de repeticao
 *
 */

// Iniciando variável $news como array
$news = array();

// Preenchendo o array
// Em $news chave 1 -> chave titulo eu tenho o valor 'Primeira noticia'
$news[1]['titulo'] = 'Primeira noticia';
// Em $news chave 1 -> chave conteudo eu tenho o valor 'Texto ...'
$news[1]['conteudo'] = 'Texto da primeira noticia blablabla ...';

// Segue a logica anterior
$news[2]['titulo'] = 'Segunda noticia';
$news[2]['conteudo'] = 'Texto da segunda noticia blablabla ...';

$news[3]['titulo'] = 'Terceira noticia';
$news[3]['conteudo'] = 'Texto da terceira noticia blablabla ...';

// Se quiser entender a estrutura da variavel $news bastar usar a função
// var_dump($news)

// Primeiro scan no array usando o loop while
$index = 1;

while ( $index <= 3 )
{

  if ( $index == 1 )
  {
    echo "Percorrendo o array news com While ...<br>";
  }
  
  echo "Titulo da noticia: " . $news[$index]['titulo'] . "<br>";
  echo "Conteudo da noticia: " . $news[$index]['conteudo'] . "<br>";
  
  $index++; // Ou $index = $index + 1;
}

// Segundo scan no array usando o loop do while
$index = 1;

do
{

  if ( $index == 1 )
  {
    echo "Percorrendo o array news com do While ...<br>";
  }
  
  echo "Titulo da noticia: " . $news[$index]['titulo'] . "<br>";
  echo "Conteudo da noticia: " . $news[$index]['conteudo'] . "<br>";
  
  $index++; // Ou $index = $index + 1;
} while ( $index <= 3 );

// Terceiro scan no array usando o loop for

for ( $index = 1; $index <= 3; $index++ )
{

  if ( $index == 1 )
  {
    echo "Percorrendo o array news com for ...<br>";
  }
  
  echo "Titulo da noticia: " . $news[$index]['titulo'] . "<br>";
  echo "Conteudo da noticia: " . $news[$index]['conteudo'] . "<br>";
  
}

?>
