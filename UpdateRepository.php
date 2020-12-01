<?php

require_once "./connection.php";


$id = $_POST["status"];
$status = 1;

if ($id) {
    $sql = $pdo->prepare("UPDATE todo SET status = :status WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->bindParam(':status', $status);
    $sql->execute();
} else {
    header("Location: /index.php");
    exit();
}