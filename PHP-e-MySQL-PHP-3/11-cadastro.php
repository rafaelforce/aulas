<?php

if ( isset( $_POST['nome'] ) && empty( $_POST['nome']) )
{
  echo "Preencha o nome completo.<br>";
}

if ( isset( $_POST['nome'] ) && empty( $_POST['cpf']) )
{
  echo "Preencha o CPF.<br>";
}

if ( isset( $_POST['nome'] ) && !is_numeric( $_POST['cpf']) )
{
  echo "Apenas numeros no CPF.<br>";
}

?>
<form method="post" action="">
  <label> Nome completo:
    <input type="text" name="nome">
  </label>
  <label> CPF:
    <input type="text" name="cpf">
  </label>
    <input type="submit" value="Cadastrar">
</form>
