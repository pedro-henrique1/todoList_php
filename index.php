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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <input class="form-control" type="text" name="pesquisa" placeholder="pesquisa por data">
    <button type="button" class="btn btn-success" style="float: right; margin: 2ch 2ch 0 0;
 "><a style="text-decoration: none; color: #000" href="/CriarNota.php">Adicionar Tarefa</a></button>
    <h1 class="tituloPrincipal">to-do list</h1>

    <div id="Container">
        <?php
        foreach ($select as $todo) { ?>
            <a href="Editar.php?id=<?php echo $todo["id"]?>"> dfg </a>
            <a href="Deletar.php?id=<?php echo $todo["id"]; ?>">guyigukgy</a>
            <div class="Conteudo">
                <label>
                    <input type="checkbox" name="feito" onclick="">
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