<?php
include '../conexao/conecta.inc';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="pt-br">
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="inserir.php">
            <label> Nome </label> <input type="text" name="nome"> </br></br>
            <label> Email </label> <input type="text" name="email"> </br></br>
            <label> Confirma Email </label> <input type="text" name="confirma_email"> </br></br>
            <label> Senha </label> <input type="password" name="senha"> </br></br>
            <label> Confirmar Senha </label> <input type="password" name="confirma_senha"> </br></br>
            <input type="submit" value="Efetuar Cadastro">
        </form>
    </body>
</html>
