<?php
include 'conexao.php';



if(isset($_POST['sup'])){
    $u=$_POST['usuario'];
    $p=$_POST['senha'];
    $t=$_POST['text'];
    $c=$_POST['cpf'];
    $dt=$_POST['dtnascimento'];
    $ed=$_POST['endereco'];
    $b=$_POST['bairro'];
    $t=$_POST['telefone'];
    $cit=$_POST['cidade'];
    $cep=$_POST['cep'];
    $o=$_POST['orcamento'];
    $i="update usuario set usuario='$u', senha='$p', nome='$t',  cpf='$c', dtnascimento='$dt',endereco='$ed', bairro='$b',telefone='$t', cidade='$cit', cep='$cep', orcamento='$o'    where usuario_id='$_SESSION[usuario_id]'";
    mysqli_query($conexao, $i);
    header('location:../dashboard/viewall.php');
}
    echo $_SESSION[usuario_id];
    $s="SELECT * FROM usuario WHERE usuario_id='$_SESSION[usuario_id]'";
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
    <link rel="icon" type="image/png" href="img/table.svg"/>
    <!--===============================================================================================-->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
 </head>
<body>
<form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
               
                <tr>
                    <td>
                        Usuario
                        <input type="text" name="usuario" value="<?php echo $_SESSION['u']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        senha
                        <input type="password" name="senha" value="<?php echo $p['senha']?>">
                    </td>
                </tr>
                     <td>
                        Nome
                        <input type="text" name="text" value="<?php echo $t['nome']?>">
                    </td>
                </tr>
                 </tr>
                     <td>
                        CPF
                        <input type="text" name="cpf" value="<?php echo $c['cpf']?>">
                    </td>
                </tr>
                 </tr>
                     <td>
                        Data Nascimento
                        <input type="text" name="dtnascimento" value="<?php echo $dt['dtnascimento']?>">
                    </td>
                </tr>
                 </tr>
                     <td>
                        Endereco
                        <input type="text" name="endereco" value="<?php echo $ed['endereco']?>">
                    </td>
                </tr>
                 </tr>
                     <td>
                        Bairro
                        <input type="text" name="Bairro" value="<?php echo $b['Bairro']?>">
                    </td>
                </tr>
                 </tr>
                     <td>
                        Telefone
                        <input type="text" name="telefone" value="<?php echo $t['telefone']?>">
                    </td>
                </tr>
                 </tr>
                     <td>
                        Cidade
                        <input type="text" name="cidade" value="<?php echo $cit['cidade']?>">
                    </td>
                </tr>
                 </tr>
                     <td>
                        Cep
                        <input type="text" name="cep" value="<?php echo $cep['cep']?>">
                    </td>
                </tr>
                 <td>
                        Orcamento
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
<a href="painel.php">Inicio</a>
 <a class="btn btn-link disabled" href="#">
                                   -----------------------------
                                   
                                </a>
<a href="../dashboard/index.php">Tela Adm</a>


   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
</html>