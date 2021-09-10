<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$dtnascimento = mysqli_real_escape_string($conexao, trim($_POST['dtnascimento']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));
$orcamento = mysqli_real_escape_string($conexao, trim($_POST['orcamento']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, cpf, dtnascimento, endereco,  bairro, telefone, cidade, cep, orcamento, usuario, senha, data_cadastro) VALUES ('$nome','$cpf', '$dtnascimento', '$endereco', '$bairro', '$telefone', '$cidade', '$cep', '$orcamento', '$usuario', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>