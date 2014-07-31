<?php
include_once('../conexao/conecta.inc');
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$tipo = $_POST['tipo'];

$q = "UPDATE usuario SET SENHA_USUARIO = '$senha',NOME_USUARIO = '$nome',TIPO_USUARIO = '$tipo',CONFIRMA_SENHA_USUARIO = '$senha' WHERE EMAIL_USUARIO = '$email'";
$r = mysql_query($q);
if($r = true){
    header("Location:../indexrestrito.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

