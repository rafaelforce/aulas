<?php

require_once("funcoes_desconto.php");

$valor_total = 800;
$desconto = 10;

$valor_total_com_desconto = calcula_desconto( $valor_total, $desconto );

?>

Valor Total: R$ <?php echo $valor_total ?> <br>
Valor Desconto: R$ <?php echo $desconto ?>% <br>
Valor Total com Desconto: R$ <?php echo $valor_total_com_desconto ?> <br>
