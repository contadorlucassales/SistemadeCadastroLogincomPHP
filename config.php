<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-gustavo';
// $dbUsername = 'luca7921_srlucassales';
// $dbPassword = 'Ls729303@';
// $dbName = 'luca7921_banco_de_dados_1';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  // if($conexao->connect_errno)
  // {
  //   echo "Erro";
  // }
  // else {
  //   echo "Conexão efetuada com sucesso";
  // }