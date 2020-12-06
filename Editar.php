<?php

require_once "vendor/autoload.php";
use Plasticbrain\FlashMessages\FlashMessages;

require_once "./connection.php";
require_once "models/TodoInsert.php";
require_once "models/UserMysql.php";
//require_once "flash/MessageFlash.php";

//$msg = new FlashMessages();

$todo = new UserMysql($pdo);
$id = filter_input(INPUT_GET, 'id');


if ($id) {
    $user = $todo->findById($id);
} else {
//    $msg->display();
//    $msg->error("ocorreu um error");
    header("Location: CriarNota.php");
    exit();
}

?>
<head>
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<form method="POST" action="EditRepository.php" autocomplete="off">
    <div class="row" style="margin: 20px 20px">
        <input type="hidden" name="id" value="<?php
        echo $user->getId(); ?>">
        <form>
            <label>
                <input class="form-control" type="text" name="title" style="width: 98%; position: absolute;"
                       value="<?php
                       echo $user->getTitle(); ?>">
            </label>

            <br/><br/>
            <label>
                <input class="form-control" type="text" name="description" style="
         margin: 9ch 0 0 0; position: absolute; width: 98%" value="<?php
                echo $user->getDescription(); ?>">
            </label>
            <button style="margin: 14ch 0 0 1ch; width: 11%;" type="submit" class="btn btn-outline-danger">Salvar
            </button>
        </form>

    </div>
</form>
