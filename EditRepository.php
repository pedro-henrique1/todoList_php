<?php

require_once "connection.php";
require_once "models/TodoInsert.php";
require_once "models/UserMysql.php";

$todo = new UserMysql($pdo);


$id = filter_input(INPUT_POST, 'id');
$title = filter_input(INPUT_POST, 'title');
$description = filter_input(INPUT_POST, 'description');

if ($title && $description && $id) {
    $result = $todo->findById($id);
    $result->setTitle($title);
    $result->setDescription($description);

    $todo->update($result);

    header("Location: index.php");
    exit();
} else {
    header("Location: Editar.php");
    exit();
}


