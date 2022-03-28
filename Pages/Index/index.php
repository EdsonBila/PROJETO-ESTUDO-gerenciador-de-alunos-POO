<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="../../CSS/index.css">
  <link rel="stylesheet" href="../../CSS/menu.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Gerenciador de Alunos</title>
</head>

<body>
  <header>
    <?php
    include("../../Shared/menu.php");
    ?>
  </header>
  <div class="princ">
    <h1>Index</h1>
    <a href="../Students/Create/index.php"><button class="btn-cadastro">Cadastrar Novo Aluno</button></a>

    <div class="table-div">
      <table>
        <thead class="titulos-tabe">
          <tr class="tr-titulo">
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Curso</th>
          </tr>
        </thead>
        <tbody class="corpo-table">
          <?php
          include("../../Classes/DataBase.php");
          $listar = new database();
          $listar->listar();
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>