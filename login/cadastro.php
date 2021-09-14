<!DOCTYPE html>
<html>
    
<head>
    <!--===============================================================================================--> 
    <meta charset="utf-8">]
    <!--===============================================================================================--> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--===============================================================================================--> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================--> 
    <title>Sistema de Cadastro MVM</title>
    <!--===============================================================================================--> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!--===============================================================================================--> 
    <link rel="stylesheet" href="css/bulma.min.css" />
    <!--===============================================================================================--> 
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="img/ui-checks.svg"/>
    <!--===============================================================================================-->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="    sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">MVM</a></h3>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cpf" type="text" class="input is-large" placeholder="Cpf/Cnpj" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="dtnascimento" type="text" class="input is-large" placeholder="Ano-Mes-dia" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="endereco" type="text" class="input is-large" placeholder="Endereço" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="bairro" type="text" class="input is-large" placeholder="Bairro" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="telefone" type="text" class="input is-large" placeholder="(ddd)-Telefone" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cidade" type="text" class="input is-large" placeholder="Cidade-US" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cep" type="text" class="input is-large" placeholder="CEP" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="orcamento" type="text" class="input is-large" placeholder="Orçamento" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <a href="login.php" class="fst-italic">Voltar</a>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</html> 