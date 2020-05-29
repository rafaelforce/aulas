<?php

// strtolower()
// Transforma a string passada como argumento em minúsculo
$minusculo = strtolower("AlUnO EvOlUcAo");
echo '$minusculo ' . $minusculo . "<br>";

// strtoupper()
// Transforma a string passada como argumento em maiúsculo
$maiúsculo = strtoupper("aluno evolucao");
echo '$maiúsculo ' . $maiúsculo . "<br>";

// ucfirst()
// Transforma a primeira letra ou caractere da string passada como argumento em maiúsculo
$primeira_maiúsculo = ucfirst("aluno evolucao");
echo '$primeira_maiúsculo ' . $primeira_maiúsculo . "<br>";

// strlen()
// Conta a quantidade de caracteres numa string
$quantas_letras_tem = strlen("aluno evolucao");
echo '$quantas_letras_tem ' . $quantas_letras_tem . "<br>";
// Desafio 8^)
// Altere o nosso projeto Validação de formulário para que o tamanho do campo CPF seja validado
// O campo CPF deve ter no mínimo 11 caracteres

// str_replace()
// Substitui um caractere por outro na string
// Parâmetros de str_replace( search, replace, subject )
$texto = "Aluno_evolucao";
$substitui = str_replace("_", " ", $texto);
echo 'Substitui $texto ' . $texto . " por " . $substitui . "<br>";

// substr()
// Retorna parte de uma string
// "A funcao substr numera os caracteres da seguinte forma"
//  0123456789...........................................55"
// Parametros de substr( string, a partir do x, até o caracter y)
$texto = "Curso de PHP e MySQL";
$parte_da_string = substr($texto, 0, 5);
echo '$parte_da_string ' . $parte_da_string . "... <br>";

?>
