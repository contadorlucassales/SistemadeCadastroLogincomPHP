<?php

include_once('config.php');

if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $genero = $_POST['genero'];
  $data_nascimento = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];
  $senha = $_POST['senha'];

  $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone', genero='$genero', data_nascimento='$data_nascimento', cidade='$cidade', estado='$estado', endereco='$endereco', senha='$senha' WHERE id='$id'";

  $result = $conexao->query($sqlUpdate);
}
header('Location: sistema.php');
?>