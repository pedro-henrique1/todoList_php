<?php

require_once 'connection.php';
require_once "models/TodoInsert.php";
require_once "models/UserMysql.php";

$todo = new UserMysql($pdo);

$title = filter_input(INPUT_POST, "title");
$description = filter_input(INPUT_POST, "description");
$date = date("Y-m-d H:i:s");

if ($title === "" || $description === "" || $date === "") {
    echo "preencha corretamente";
    header("Location: CriarNota.php");
    exit();
}else {
    $newUser = new TodoInsert();
    $newUser->setTitle($title);
    $newUser->setDescription($description);
    $newUser->setDate($date);
    $todo->add($newUser);

    header("Location: index.php ");
    exit();
}
