<?php

require_once "./connection.php";

$id = $_GET["id"];

$sql = $pdo->prepare("DELETE FROM todo WHERE id = :id;");
$sql->bindParam(":id", $id);
$sql->execute();
header("Location: index.php");
exit;


