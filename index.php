<?php

require_once "./connection.php";
$list = [];
$select = $pdo->query("SELECT * FROM todo");


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

  <a href="/CriarNota.php" style="text-decoration: none; color: #000">
    <button type="button" class="btn btn-warning" style="float: right; margin: 1ch 2ch 0 0;  z-index: 999;">Adicionar
      Tarefa
    </button>
  </a>


  <h1 class="tituloPrincipal">to-do list</h1>

  <div id="Container">
    <?php
        foreach ($select as $todo) { ?>
    <a href='Editar.php?id=<?php
                                    if (isset($todo)) {
                                        echo $todo["id"];
                                    } ?>'> <img class="imagesEdit" src="images/edit-solid.svg" alt="icone editar"></a>
    <a href='Deletar.php?id=<?php
                                    if (isset($todo)) {
                                        echo $todo["id"];
                                    } ?>'><img class="imagesDelete" src="images/trash-solid.svg"
        alt="icone excluir"></a>
    <div class="Conteudo">
      <label>
        <input type="checkbox" class="checkbox" name="status" value="<?php
                                                                                    echo $todo["id"] ?>"
          onclick="Check()">
      </label>
      <h2 class="titulo"><?php
                                    echo $todo["title"] ?></h2>
      <p class="descricao">Descrição: <?php
                                                echo $todo["description"] ?> </p>
      <p class="data">Data: <?php
                                        echo $todo["date"] ?></p>

    </div>
    <?php
        } ?>

  </div>
</body>

</html>

<script>
function Check() {
  document.querySelector("[value]:checked").addEventListener('click', function(event) {
    console.log(this.value)

  })
}
</script>