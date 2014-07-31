<?php
include_once('conexao/conecta.inc');
include_once('includes/funcoes_uteis.inc');
validaAutenticacao('frm_login.php','RES');
echo '<h1>Área Restrita</h1>'; 
echo '<a href=logout.php?p=frm_login.php> Logout </a> <br/>';
echo 'Logado Com sucesso<br />';

/*$email = $_SESSION['email'];
echo $email;
$q = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$r = mysql_query($q);
$listagem = mysql_fetch_array($r);
//while($listagem = mysql_fetch_array($r)){
    echo $listagem['COD_USUARIO'].'<br />';*/
    echo '<a href="update/frmAtualizarUsuario.php">Atualizar dados</a>';
//}

