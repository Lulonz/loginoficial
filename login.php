<?php
echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc';

if(isset($_POST['email']) and isset($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO ='$email'";
    $result = mysql_query($query);
    $totalUsuarios = mysql_num_rows($result);
    if($totalUsuarios === 0){
        echo '<a href="frm_login.php">Usuário inexistente</a>';
    }else{
        $usuarios       = mysql_fetch_array($result);
        $senhaUsuario   = $usuarios['SENHA_USUARIO'];
        $tipoUsuario    = $usuarios['TIPO_USUARIO'];
        if($senha !== $senhaUsuario){
            echo '<a href="frm_login.php">Senha não confere!</a>';
        }else{
            //Agora sem estão corretos email e senha
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            
            if($tipoUsuario === 'RES'){
                echo '<script type="text/javascript">location.href="indexrestrito.php"</script>';
            }else if($tipoUsuario === 'ADM'){
                echo '<script type="text/javascript">
                         location.href="admin/indexadmin.php"
                     </script>';
            }else{
                echo '<a href=frm_login.php>Tipo de Usuários Inválido</a>';
            }
        }
    }
}else{
   echo '<script type="text/javascript">location.href="frm_login.php"</script>';
}
