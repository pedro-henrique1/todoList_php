<?php

require_once "connection.php";

$id = $_POST["id"];
$title = $_POST["title"];
$description = $_POST["description"];


if ($title && $description && $id) {
    $sql = $pdo->prepare("UPDATE todo SET title = :title, description = :description WHERE id = :id");
    $sql->bindParam(':title', $title);
    $sql->bindParam(':description', $description);
    $sql->bindParam(':id', $id);
    $sql->execute();
    header("Location: index.php");
    exit;
} else {
    header("Location: CriarNota.php");
    exit();
}


