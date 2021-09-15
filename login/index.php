<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <!--===============================================================================================-->  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--===============================================================================================-->  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <title>Sistema de Login MVM</title>
    <!--===============================================================================================-->  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!--===============================================================================================-->  
    <link rel="stylesheet" href="css/bulma.min.css" />
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="img/person-square.svg"/>
    <!--===============================================================================================--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">MVM</a></h3>
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
                    <div class="box">
                        <form action="../site/index.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input  name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <div class="text-center p-t-136">
                                <a class="txt2" href="cadastro.php">
                                   Crie sua Conta
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-primary disabled" href="#">
                                   -----------------------------
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                                <a class="txt2" href="../nivel/index.php">
                                   Acesso Ao Dashboard
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>