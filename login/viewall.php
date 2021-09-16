<?php
    include 'conexao.php';
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

<table class="table table-dark table-borderless" border='2'>
    <tr>
        <th>
            ID
        </th>
        <th>
            Usuario
        </th>
        <th>
            Senha
        </th>
        <th>
            Nome
        </th>
        <th>
            Cpf/Cnpj
        </th>
        <th>
            Data Nascimento
        </th>
        <th>
            Endereco
        </th>
        <th>
            Bairro
        </th>
        <th>
            Telefone
        </th>
        <th>
            Cidade
        </th>
        <th>
            CEP
        </th>
        <th>
            Orçamento
        </th>
        <th>
            Data de Cadastro
        </th>
        <th>
            <i class="bi bi-trash"></i>
        </th>
        <th>
            <i class="bi bi-pencil-fill"></i>
        </th>
    </tr>

<?php
$sq="select * from usuario";
$qu=mysqli_query($conexao,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['usuario_id']?>
        </td>
        <td>
            <?php echo $f['usuario']?>
        </td>
        <td>
            <?php echo $f['senha']?>
        </td>
        <td>
            <?php echo $f['nome']?>
        </td>
        <td>
            <?php echo $f['cpf']?>
        </td>
        <td>
            <?php echo $f['dtnascimento']?>
        </td>
        <td>
            <?php echo $f['endereco']?>
        </td>
        <td>
            <?php echo $f['bairro']?>
        </td>
        <td>
            <?php echo $f['telefone']?>
        </td>
        <td>
            <?php echo $f['cidade']?>
        </td>
        <td>
            <?php echo $f['cep']?>
        </td> 
        <td>
            <?php echo $f['orcamento']?>
        </td> 
        <td>
            <?php echo $f['data_cadastro']?>
        </td> 
        <td>
            <a href="delete.php?del=<?php echo $f['usuario_id']?>">Delete</a>
        </td> 
    </tr>
    <?php
}
?>

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