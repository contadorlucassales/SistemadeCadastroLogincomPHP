<?php
  session_start();
  include_once('config.php');
  // print_r($_SESSION);
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
  $logado = $_SESSION['email'];

  $sql = "SELECT * FROM usuarios ORDER BY id DESC";

  $result = $conexao->query($sql);

  // print_r($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Sistema | GN</title>
  <style>
  body {
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    color: white;
    text-align: center;
  }

  .table-bg {
    background: rgba(0, 0, 0, 0.5);
    border-radius: 15px 15px 0 0
  }
  </style>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Sistema do GN</span>
    </div>
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </nav>
  <br>
  <?php
  echo "<h1>Bem vindo <u>$logado</u></h1>";
?>

  <div class="m-5">
    <table class="table text-white table-bg">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
          <th scope="col">Gênero</th>
          <th scope="col">Data de nascimento</th>
          <th scope="col">Cidade</th>
          <th scope="col">Estado</th>
          <th scope="col">Endereço</th>
          <th scope="col">Senha</th>
          <th scope="col">...</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>" . $user_data['id'] . "</td>";
          echo "<td>" . $user_data['nome'] . "</td>";
          echo "<td>" . $user_data['email'] . "</td>";
          echo "<td>" . $user_data['telefone'] . "</td>";
          echo "<td>" . $user_data['genero'] . "</td>";
          echo "<td>" . $user_data['data_nascimento'] . "</td>";
          echo "<td>" . $user_data['cidade'] . "</td>";
          echo "<td>" . $user_data['estado'] . "</td>";
          echo "<td>" . $user_data['endereco'] . "</td>";
          echo "<td>" . $user_data['senha'] . "</td>";
          echo "<td>
          <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
          <svg xmlns='http://www.w3.org/2000/svg' width= '16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
          <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
          </svg>
          </td>";
          echo "</tr>";
        }

?>
      </tbody>
    </table>
  </div>

</body>

</html>