<?php

require_once "./connection.php";


$info = [];
$id = $_GET["id"];


if ($id) {
    $sql = $pdo->prepare("SELECT * FROM todo WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    if ($sql->rowCount()) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
} else {
    header("Location: /index.php");
    exit();
}

?>
<head xmlns="http://www.w3.org/1999/html">
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<form method="post" action="/EditRepository.php" autocomplete="off">
    <div class="row" style="margin: 20px 20px">
        <input type="hidden" name="id" value="<?php
        echo $info['id'] ?>">
        <form>
            <input class="form-control" type="text" value="<?php
            echo $info["title"] ?>">
            <br/><br/><br/><br/>
            <input class="form-control" type="text" value="<?php
                  echo $info["description"] ?>">
        </form>

    </div>
    <button style="margin: 30px" type="submit" class="btn btn-success">Adicionar</button>
</form>
