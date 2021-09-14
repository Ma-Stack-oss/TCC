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
 </head>
 <body>
<a href="painel.php">Inicio</a>

<table class="table table-dark table-borderless" border='1'>
    <tr>
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
            Usuario
        </th>
        <th>
            Senha
        </th>
    </tr>

<?php
$sq="select * from usuario";
$qu=mysqli_query($conexao,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
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
            <?php echo $f['usuario']?>
        </td>
        <td>
            <?php echo $f['senha']?>
        </td>
    </tr>
    <?php
}
?>