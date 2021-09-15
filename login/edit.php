<?php
include 'conexao.php';

if(isset($_POST['sub'])){
    $u=$_POST['usuario'];
    $p=$_POST['senha'];
    $n=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $d=$_POST['dtnascimento'];
    $e=$_POST['endereco'];
    $b=$_POST['bairro'];
    $t=$_POST['telefone '];
    $cid=$_POST['cidade'];
    $cep=$_POST['cep'];
    $o=$_POST['orcamento'];
    }

    $i="update usuario set usuario='$u', senha='$p', nome='$n',cfp='$c',dtnascimento='$d',endereco='$e',bairro='$b',telefone='$t',cidade='$cid',cep='$cep' where id='$_SESSION[usuario_id]'";
    mysqli_query($conexao, $i);
    header('location:home.php');

    $s="select*from usuario where id='$_SESSION[usuario_id]'";
    $qu= mysqli_query($conexao, $s);
    $f=mysqli_fetch_assoc($qu);
    ?> 

<!doctype html>
<html lang="pt">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="   sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <!--===============================================================================================--> 
   <title>Contas Logadas</title>
   <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="img/pencil-fill.svg"/>
    <!--===============================================================================================-->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
 </head>
<body>
<form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Usuario
                        <input type="text" name="usuario" value="<?php echo $u['usuario']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Senha
                        <input type="password" name="Senha" value="<?php echo $p['password']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nome
                        <input type="text" name="nome" value="<?php echo $n['nome']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        CPF
                        <input type="text" name="cpf" value="<?php echo $cpf['cpf']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Data de Nascimento
                        <input type="text" name="dtnascimento" value="<?php echo $d['dtnascimento']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Endereço
                        <input type="text" name="endereco" value="<?php echo $e['endereco']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Bairro
                        <input type="text" name="bairro" value="<?php echo $b['bairro']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefone
                        <input type="text" name="telefone" value="<?php echo $t['telefone']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Cidade
                        <input type="text" name="cidade" value="<?php echo $c['cidade']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        CEP
                        <input type="text" name="cep" value="<?php echo $cep['cep']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Orçamento
                        <input type="text" name="orcamento" value="<?php echo $o['orcamento']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
</form>

 <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
</html>