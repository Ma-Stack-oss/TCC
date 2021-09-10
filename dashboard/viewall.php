<?php
    include 'conexao.php';
    include 'verifica_login.php';
?>

<a href="painel.php">Inicio</a>

<table border='1'>
    <tr>
        <th>
            Nome
        </th>
        <th>
            Cpf/Cnpj
        </th>
        <th>
            dtnascimento
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
            Cep
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