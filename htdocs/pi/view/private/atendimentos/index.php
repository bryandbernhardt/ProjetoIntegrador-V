<?php

session_start();
if(isset($_SESSION['email']) == false)
  header('location: ../../login/index.php');

require_once '../../../model/inicia.php';
$PDO = conecta_bd();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Covid-19 Brasil</title>
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="../../styles/header.css">
  <link rel="stylesheet" href="../../styles/atendimentos.css">
  <link rel="stylesheet" href="../../styles/table.css">
</head>
<body>
  <header>
    <div>
      <h1>Covid-19 Brasil</h1>
      <nav>
        <div>
          <ul class="navbar">

          </ul>
        </div>
      </nav>
    </div>
    <div>
      <form action="../../../controller/logofController.php" method="post">
        <input type="submit" value="Sair">
      </form>
    </div>
  </header>
  <main>
    <h2>Consultas</h2>
    <?php
    $stmt_count = $PDO->prepare("SELECT COUNT(*) AS total FROM paciente");
    $stmt_count->execute();

    $stmt = $PDO->prepare("SELECT nome_completo, CPF, CEP_UF, sexo, idade, telefone FROM paciente ORDER BY nome_completo");
    $stmt->execute();

    $total = $stmt_count->fetchColumn();

    if($total > 0):
    ?>
    <table border="1">
      <thead>
        <tr>
          <th>Nome</th>
          <th>CPF</th>
          <th>CEP</th>
          <th>Sexo</th>
          <th>Idade</th>
          <th>Telefone</th>
        </tr>
      </thead>
      <tbody>
        <?php while($resultado = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
          <tr>
            <td><?php echo $resultado['nome_completo'] ?></td>
            <td><?php echo $resultado['CPF'] ?></td>
            <td><?php echo $resultado['CEP_UF'] ?></td>
            <td><?php echo $resultado['sexo'] ?></td>
            <td><?php echo $resultado['idade'] ?></td>
            <td><?php echo $resultado['telefone'] ?></td>
          </tr>
          <?php endwhile; ?>
      </tbody>
    </table>
    <p>Total de pacientes: <?php echo $total ?></p>
    <?php else: ?>
      <p>Sem pacientes cadastrados</p>
    <?php endif; ?>
  </main>
</body>
</html>