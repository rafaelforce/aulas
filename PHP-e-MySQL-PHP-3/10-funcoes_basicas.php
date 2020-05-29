<?php

// isset()
// Retorna true caso a variavel exista
// Retorna false caso a variavel nao exista

$teste_isset = 'aluno';

if ( isset( $teste_isset ) )
{
  echo "Variavel iniciada!";
}
else
{
  echo "Variavel nao iniciada!";
}

// empty()
// Retorna true sempre que a variavel está vazia
// Para empty() true é igual a '' ou 0 ou '0' ou false ou null ou array() vazio
// Retorna false se a variavel não estiver vazia

$teste_empty = '';

if ( empty( $teste_empty ) )
{
  echo "Variavel esta vazia!";
}
else
{
  echo "Variavel nao esta vazia!";
}

$teste_empty = 0;

if ( empty( $teste_empty ) )
{
  echo "Variavel esta vazia!";
}
else
{
  echo "Variavel nao esta vazia!";
}

$teste_empty = '0';

if ( empty( $teste_empty ) )
{
  echo "Variavel esta vazia!";
}
else
{
  echo "Variavel nao esta vazia!";
}

$teste_empty = false;

if ( empty( $teste_empty ) )
{
  echo "Variavel esta vazia!";
}
else
{
  echo "Variavel nao esta vazia!";
}

$teste_empty = null;

if ( empty( $teste_empty ) )
{
  echo "Variavel esta vazia!";
}
else
{
  echo "Variavel nao esta vazia!";
}

$teste_empty = array();

if ( empty( $teste_empty ) )
{
  echo "Variavel esta vazia!";
}
else
{
  echo "Variavel nao esta vazia!";
}

$teste_empty = 'vazio';

if ( empty( $teste_empty ) )
{
  echo "Variavel esta vazia!";
}
else
{
  echo "Variavel nao esta vazia!";
}

// is_numeric()
// Testa se a variável é um número ou uma string numérica
$teste_is_numeric = 0;

if ( is_numeric( $teste_is_numeric ) )
{
  echo "A varivel eh um numero";
}
else
{
  echo "A variavel nao eh um numero";
}

$teste_is_numeric = "0";

if ( is_numeric( $teste_is_numeric ) )
{
  echo "A varivel eh um numero";
}
else
{
  echo "A variavel nao eh um numero";
}

$teste_is_numeric = "zero";

if ( is_numeric( $teste_is_numeric ) )
{
  echo "A varivel eh um numero";
}
else
{
  echo "A variavel nao eh um numero";
}

?>
