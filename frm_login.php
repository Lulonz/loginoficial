<?php
include 'conexao/conecta.inc';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="pt-br">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <h1>Login</h1> 
        <form method="post" action="login.php">
            <label>Email</label> <input type="email" name="email" /><br /><br />
            <label>Senha</label> <input type="password" name="senha" /><br /><br />
            <input type="submit" value="Enviar" /><a href="cadastro/frmcadastro.php">Cadastre-se</a><br/>
            <a href="recuperacao_senha/frmRecuperarSenha.php">Esqueceu sua senha?</a><br/>
        </form>        
    </body>
</html>
