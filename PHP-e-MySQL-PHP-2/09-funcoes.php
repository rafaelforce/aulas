<?php

function desenha_form( $nome, $telefone )
{
  echo "<form action=\"funcoes.php\" method=\"get\">";
  echo "Digite seu nome: <input type=\"text\" value=\"$nome\" name=\"nome\"><br>";
  echo "Digite seu telefone: <input type=\"text\" value=\"$telefone\" name=\"telefone\"><br>";
  echo "<input type=\"submit\">";
  echo "</form>";
}

if ( $_GET['nome'] != '' ) 
{
  $nome = $_GET['nome'];
} 
else
{
  $nome = "Novo cadastro";
}

if ( $_GET['telefone'] != '' )
{
  $telefone = $_GET['telefone'];
} 
else
{ 
  $telefone = "Novo telefone";
} 

desenha_form($nome, $telefone);

?>
