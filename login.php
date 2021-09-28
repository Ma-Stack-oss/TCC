<!doctype html>
<html lang="pt-5">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />

    <title>Login</title>
  </head>

<body>
    <?php
    if(!empty($_GET['msg'])){
         
        if ($_GET['msg'] == "OK"){
    ?>
            <div class="alert alert-info" role="alert">
                <?php echo "<strong> Registrado com Sucesso. Faça seu Login</strong>"; ?>
            </div>
    <?php

        }
        
        else if($_GET['msg'] == "LOGIN_ERROR"){

            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "<strong> Usuario ou Senha Incorretas.</strong>"; ?>
            </div>
    <?php

        }
        
        else
        
        {
    ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "<strong> Não Foi Possivel Conectar ao Banco. <strong><br>";?>
            </div>
    <?php
        }
        unset($_GET['msg']);
    }

    
    ?>

    <div id="login" >
        <h3 class="text-center text pt-5"><b>Formulário MVM</b></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="customersession.php" method="post">
                            <h3 class="text-center text-secondary"><i>Login</i></h3>
                            <div class="form-group">
                                <label for="username" class="text-secondary"><i>Usuario(E-MAIL):</i></label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-secondary"><i>SENHA:</i></label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register.html" class="text-secondary"><i>Registrar</i></a>
                            </div>
                            <div class="form-group">
  
                                <input type="submit" name="submit" class="btn btn-secondary btn-md" value="LOGIN"><br><br><br><br>
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>