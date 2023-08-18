<?php   
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> -->
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>

                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>

                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>

                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>


                    <div class="wrapper">
                        <form action="cadastrar.php" method="POST">
                        <h1>Cadastro</h1>
                            <div class="input-box">
                                <input type="text" name="nome" class="input is-large" placeholder="Nome" autofocus>
                            </div>
                            <div class="input-box">
                                <input type="text" name="usuario" class="input is-large" placeholder="Usuário">
                            </div>
                            <div class="input-box">
                                <input type="password" name="senha" class="input is-large" placeholder="Senha">
                            </div>

                            <button type="submit" class="btn" >Cadastrar</button>

                            <div class="register-link">
                                 <p>Just have an account?<a href="login.php">Login</a> </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>