<?php

require_once "./connection.php";


$id = $_GET["id"];

$status = 1;

if ($id) {
    $sql = $pdo->prepare("UPDATE todo SET status = :status WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->bindParam(':status', $status);
    $sql->execute();
    header("Location: /index.php "  );
    exit(302);
} else {
    header("Location: /index.php");
    exit();
}