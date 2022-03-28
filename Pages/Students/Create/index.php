<?php
$action = "Create.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="../../../CSS/menu.css">
</head>

<body>
  <header>
    <?php
    include("../../../Shared/menu.php");
    ?>
  </header>

  <h1>Cadastro Alunos</h1>
  <form action="<?php echo $action ?>" method="post">
    <label>
      Nome:<input type="text" name="nome">
    </label><br>
    <label>
      E-mail:<input type="text" name="email">
    </label><br>
    <label>
      Telefone:<input type="text" name="telefone">
    </label><br>
    <label>
      Curso:<input type="text" name="curso">
    </label><br>
    <button type="submit">Cadastrar</button>
  </form>
  <a href="../../Index/index.php">Ver Alunos cadastrados</a>
</body>

</html>