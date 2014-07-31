<meta charset="utf-8">
<?php
include_once('../includes/funcoes_uteis.inc');
validaAutenticacao('../frm_login.php','ADM');
echo '<h1>Área do Admin</h1>';
echo '<a href=../logout.php?p=frm_login.php> Logout </a>';
echo 'Logado Com sucesso';