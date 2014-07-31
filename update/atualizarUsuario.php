<?php
include_once('../conexao/conecta.inc');
include_once ('../classes/bcrypt.class.php');
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$tipo = 'RES';
$senha = Bcrypt::hash($senha);

$q = "UPDATE usuario SET SENHA_USUARIO = '$senha', NOME_USUARIO = '$nome',TIPO_USUARIO = '$tipo' WHERE EMAIL_USUARIO = '$email'";
$r = mysql_query($q);
if($r == true){
    header("Location:../indexrestrito.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

