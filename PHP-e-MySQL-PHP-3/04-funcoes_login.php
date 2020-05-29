<?php

function valida_login( $login, $senha )
{
  // Normalmente faremos isso em banco de dados, mas
  // como ainda não chegamos nessa parte as credenciais
  // ficam armazenadas no próprio arquivo (nunca façam
  // isso em produção ^_^)
  $login_default = "aluno";
  $senha_default = "alunoevol";
  
  if ( $login == $login_default && $senha == $senha_default )
  {
    return true;
  }
    
  return false;
  
}

?>
