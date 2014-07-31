<?php
include_once '../conexao/conecta.inc';
echo ('<meta charset="UTF-8">');

$email = $_POST['email'];

echo $email;

$query = ("SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'");
$result = mysql_query($query);
$todosUsuarios = mysql_num_rows($result);
$senha = $todosUsuarios['SENHA_USUARIO'];

if($todosUsuarios === 0){

echo '<a href="frm_login.php">Você não está cadastrado!</a>';
             
}
else{
    $para = $email;
    $assunto = "Esqueceu sua senha de email";
    $mensagem = "Sua mensagem é:" . $senha;
    $cabecalho = "MIME-Version: 1.0" . "\r\n";
    $cabecalho .= "Content-type: text/html; charset=ISO 8859-1". "\r\n";
    $cabecalho .= "from: Anderson<anderson@hotmail.com>" . "\r\n" .
     "Reply-to: anderson@hotmail.com" . "\r\n";
    
    if(mail($para, $assunto, $mensagem, $cabecalho))
    {
        echo 'Senha recuperada com sucesso';
        echo $mensagem;
    }       
}

