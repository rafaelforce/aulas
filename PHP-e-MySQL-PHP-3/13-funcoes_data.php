<?php
// date()
// Formata uma data a partir de argumentos passados pra função
// A função entede os seguintes argumentos: 
// Y para ano
// m para mes
// d para dia
// h ou H para hora
// i para minuto
// s para segundo
// Estrutura da função date( formato, timestamp )
$data = date("d/m/Y h:i:s");
echo '$data: ' . $data . "<br>";

################################################################
# Se por acaso o seu relógio não bater com o resultado desses  #
# comandos, então será preciso fazer uma alteração no arquivo  #
# de configuração do PHP.                                      #
# Na seção [Date] do php.ini altere o date.timezone de UTC     #
# para Brazil                                                  #
# date.timezone=Brazil                                         #
# ou pode-se setar o timezone a partir da própria página PHP   #
# caso não seja possível alterar esse valor no php.ini         #
# Nesse caso use a função date_default_timezone_set            #
# Exemplo: date_default_timezone_set('America/Fortaleza');     #
################################################################

// Vamos supor que voce queira saber a diferença entre duas datas por exemplo
// strtotime converte uma string pra uma data valida em segundos
$data_inicial = '2016-11-19';
$data_final = '2016-12-25';

$hoje = strtotime( $data_inicial );
$natal = strtotime( $data_final );

$natal_em_segundos = $natal - $hoje;

echo "Natal daqui a " . $natal_em_segundos / 86400 . " dias.<br>"; 

?>
