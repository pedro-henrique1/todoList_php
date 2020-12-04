<?php

require_once "./connection.php";
require_once "models/TodoInsert.php";
require_once "models/UserMysql.php";

$todo = new UserMysql($pdo);
$user = false;
$id = filter_input(INPUT_GET, 'id');


if ($id) {
    $user = $todo->findById($id);
}

if ($user == false){
    header("Location: index.php");
    exit();
}

?>
<head>
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<form method="post" action="EditRepository.php" autocomplete="off">
    <div class="row" style="margin: 20px 20px">
        <input type="hidden" name="id" value="<?php
        echo $user->getId(); ?>">
        <form>
            <input class="form-control" type="text" value="<?php
            echo $user->getTitle(); ?>">
            <br/><br/><br/><br/>
            <input class="form-control" type="text" value="<?php
            echo $user->getDescription(); ?>">
        </form>

    </div>
    <button style="margin: 30px" type="submit" class="btn btn-success">Salvar</button>
</form>
