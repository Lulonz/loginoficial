<meta charset="utf-8">
<?php

function validaAutenticacao($link,$tipo){
    session_start();
    if(!isset($_SESSION['email']) or !isset($_SESSION['senha'])):
        
        echo '  <script>
                    alert("Você não efetuou o login!");
                    location.href="'.$link.'";
                </script>
             ';
    else:
        if($tipo === 'RES'):
            include_once('conexao/conecta.inc');
        elseif($tipo === 'ADM'):
            include_once('../conexao/conecta.inc');
        endif;
        $email          = $_SESSION['email'];
        $query          = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";
        $result         = mysql_query($query);
        $usuarios       = mysql_fetch_array($result);
        $tipoUsuario    = $usuarios['TIPO_USUARIO'];
        
        if($tipo !== $tipoUsuario){
            session_destroy();
            echo '<script>
                        alert("Acesso Negado! \n  Você não possui credenciais para acessar está página!");
                        location.href="'.$link.'";
                  </script>
                 ';        
            
        }
    endif;
    
}