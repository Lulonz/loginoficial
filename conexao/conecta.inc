<?php
define('SERVER','localhost');
define('USER','root');
define('PASSWORD','12345678');
define('DB','loginoficial');

$conexao    =   mysql_connect(SERVER,USER,PASSWORD) or die(mysql_error());
if($conexao === FALSE){
    echo('Não foi possível estabelecer uma conexão com o gerenciar Mysql<br />');
    echo(mysql_error());
}else{
    if(!mysql_select_db(DB,$conexao)){
        echo('Não foi possível selecionar o DB');
        echo(mysql_error());
    }
}