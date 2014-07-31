<?php
echo '<meta charset=UTF-8>';
include_once '../conexao/conecta.inc';
include_once '../classes/bcrypt.class.php';
$email = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$tipoUsuario = 'RES';
$senha = Bcrypt::hash($senha);

$query = "INSERT INTO usuario(EMAIL_USUARIO,SENHA_USUARIO,NOME_USUARIO,TIPO_USUARIO)";
$query.= " VALUES('$email','$senha','$nome','$tipoUsuario')";

if(mysql_query($query)):
    echo '<script>alert("Cadastro efetuado com sucesso !")</script>';
    echo '<a href=../frm_login.php>Efetuar Login</a>';
else:
    echo '<script>
           alert("Não foi possivel seu cadastro!")
           location.href="index.php"
          </script>';
endif;
    
