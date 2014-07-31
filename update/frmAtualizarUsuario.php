<!DOCTYPE html>
<html>
    <head>
        <title> Formulário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#">
    </head>    
    <body>
        <?php
              session_start();
              include '../conexao/conecta.inc';
              $email = $_SESSION['email'];
              //echo($email);
              //$codigo_usuario = $_REQUEST['codigo'];
              
              //echo '<h1>'.$codigo_usuario.'</h1>';
              $sql = "SELECT * FROM usuario WHERE EMAIL_USUARIO ='$email'";
              $result = mysql_query($sql);
              $usuarios = mysql_fetch_array($result);
        ?>
        
        <form action="atualizarUsuario.php" method="post">
           Nome: <input type="text" name="nome" required  value="<?php echo $usuarios['NOME_USUARIO'] ?>"> <br/>
           Senha: <input type="text" name="senha" required value="<?php echo $usuarios['SENHA_USUARIO']?>"> <br/>
           Email: <input type="email" name="email" required value="<?php echo $usuarios['EMAIL_USUARIO']?>"> <br/>
           Tipo de usuário:
              <select name="tipo">
           <?php 
              $tipo = $usuarios['TIPO_USUARIO'];
               if($tipo === 'ADM')
               {
                   echo '<option selected> ADM </option>';
                   echo '<option> RES </option>';
               }
               else
               {
                 echo '<option selected> RES </option>';  
                 echo '<option> ADM </option>';
               }
              ?>
            </select> <br/>
           <!--CPF: <input type="text" name="cpf" required><br/>
           Logradouro: <input type="text" name="endereco" required> <br/>
           CEP: <input type="text" name="cep" required><br/>-->
           <input type="submit" value="atualizar" >
           </form>
        
    </body>
</html>