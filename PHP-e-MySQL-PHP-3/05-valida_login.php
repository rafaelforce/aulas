<?php

require_once('funcoes_login.php');

$login_usuario = $_POST['login'];
$password_usuario = $_POST['password'];

$status_usuario = valida_login( $login_usaurio, $password_usuario );

if ( $status_usuario )
{
  echo "Acesso liberado!";
}
else
{
  echo "Acesso negado!";
}

?>
