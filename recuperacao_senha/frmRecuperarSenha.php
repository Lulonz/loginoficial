<?php
include '../conexao/conecta.inc';
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <title> </title>   
    </head>    
    <body>
        <h1> Esqueceu sua senha? </h1>
        <form action="recuperarSenha.php" method="post">
            <label> Email </label> <input type="email" name="email"> <br/> <br/>
            <input type="submit" value="enviar">
            
        </form>
    </body>
</html>
