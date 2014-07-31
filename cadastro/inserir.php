<?php
include '../conexao/conecta.inc';
echo('<meta charset=utf-8>');

$nome           = $_POST['nome'];
$email          = $_POST['email'];
$confirma_email = $_POST['confirma_email'];
$senha          = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];
$tipo_usuario   = 'RES';

/*echo($nome).'<br />';
echo($email).'<br />';
echo($senha).'<br />';
echo($confirma_senha).'<br />';
echo($tipo_usuario);*/

if(($senha != $confirma_senha) || ($email != $confirma_email)){
   echo('<a href="frminserir.php">Senha ou email não confere</a>');
}else{
   $q  = ("INSERT INTO usuario (EMAIL_USUARIO, SENHA_USUARIO, NOME_USUARIO, TIPO_USUARIO, CONFIRMA_SENHA_USUARIO)");
   $q .= (" VALUES('$email', '$senha', '$nome', '$tipo_usuario', '$confirma_senha')");
   $ex = mysql_query($q);
   echo('Cadastrado com sucesso!').'<br />';
   echo('<a href="../frm_login.php">Logar-se</a>');
}
