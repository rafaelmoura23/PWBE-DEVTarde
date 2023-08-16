<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>

                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    <div class="box0" id="box">
                        <h2>LOGIN</h2>
                        <form action="login.php" method="POST">
                            <div class="field">
                            <input name="usuario" name="text" id="usuarioField" class="input is-large" placeholder="Seu usuário" autofocus="">
                            </div>

                            <div class="field">   
                                    <input name="senha" id="senhaField" class="input is-large" type="password" placeholder="Sua senha">
                            </div>

                            <div class="field">
                            <button type="submit"><a href="cadastro.php">Cadastrar</a></button> 
                            <button type="submit">Entrar</button>
                            </div>

                        </form>
                    </div>    
</body>
</html>