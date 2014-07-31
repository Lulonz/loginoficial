<?php
// Recebendo o email do formulário
$email = $_GET['login'];
// configuração
define('SERVER','localhost');
define('USER','root');
define('PASSWORD','12345678');
define('DB','loginoficial');
// Estabelecendo a conexão e selecionando o banco de dados
$conexao    =   mysql_connect(SERVER,USER,PASSWORD) or die(mysql_error());
mysql_select_db(DB,$conexao);
// Montando a query
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO='$email'";
//Executando a query
$result = mysql_query($query);
// Criando uma matriz para armazenar os emails cadastrados
$emailsCadastrados = array();
// Carregando a matriz com os emails do banco de dados
while($usuarios = mysql_fetch_assoc($result))
{
    $emailsCadastrados[] = $usuarios['EMAIL_USUARIO'];
}
// A função in_array(), verifica a existência de um certo valor dentro de uma matriz qualquer.
// A função recebe dois párâmetros: o "valor a ser pesquisado" e "a matriz" objeto da busca.
// Veja:
if(in_array($email, $emailsCadastrados))
{
  echo 'false';   
}        
else{
    echo 'true';
}   
exit();


