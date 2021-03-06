<?php

require_once "./connection.php";
require_once "models/UserMysql.php";
require_once "models/TodoInsert.php";

$todo = new UserMysql($pdo);
$list = $todo->findAll();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="shortcut icon" href="images/icons8-todo-list-50.png" type="image/x-icon">
</head>

<body>

  <a href="/CriarNota.php" style="text-decoration: none; color: #000">
    <button type="button" class="btn btn-warning" style="  float: right;  margin: 1ch 2ch 0 0;  z-index: 999;">Adicionar
      Tarefa
    </button>
  </a>
  <a href="/Update.php" style="text-decoration: none; color: #000">
    <button type="button" class="btn btn-warning" style="  float: right;  margin: 1ch 2ch 0 0;  z-index: 999;">Desmarcar
    </button>
  </a>


  <h1 class="tituloPrincipal">to-do list</h1>

  <div id="Container">
    <?php
    foreach ($list as $todo) { ?>
    <a href='Editar.php?id=<?php
                              echo $todo->getId(); ?>'>
      <i class="far fa-edit m-3 mt-2" style="font-size: 24px; color: #fff"></i>

      <a href='Deletar.php?id=<?php
                                echo $todo->getId(); ?>'>
        <i class="fa fa-trash-alt m-3" style="font-size: 24px; color: #fff" aria-hidden="true"></i>

        <?php
          if ($todo->getStatus()) {
            echo "<div class='Conteudo'   style='opacity:0.4'";
          } else {
            echo "<div class='Conteudo'";
          }
          ?>

        <label>
          <input type="checkbox" class="checkbox" onclick="Check()" name="status" value="<?php
                                                                                            echo $todo->getId() ?>">
        </label>
        <h2 class="titulo"><?php
                              echo $todo->getTitle(); ?></h2>
        <p class="descricao">Descrição: <?php
                                          echo $todo->getDescription(); ?> </p>
        <p class="data">Data: <?php
                                echo $todo->getDate(); ?></p>
  </div>
  <?php
    } ?>

  <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
  <script>
  function Check() {
    document.querySelector('input[name="status"]:checked').onclick = function() {
      let value = this.value;
      window.location = "UpdateRepository.php?id=" + value;
    }
  }
  </script>
</body>

</html>