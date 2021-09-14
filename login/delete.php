<?php 
  include 'conexao.php';

  $usuario_id = $_GET['del'];

  $sql = "DELETE FROM usuario WHERE usuario_id = $usuario_id";
  $rs = mysqli_query($conexao, $sql);

  if($rs){
    echo "Login Apagado Com Sucesso!";
  }else{
    echo "Erro ao Apagar Cliente";
}

?>

<a href="viewall.php">Listagem de Clientes</a>
<a href="login.php">Login de Clientes</a>