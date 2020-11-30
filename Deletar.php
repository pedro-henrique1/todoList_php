<?php

require_once "./connection.php";

$id = $_GET["id"];
if (isset($id)) {
    if (!empty($pdo)) {
        $sql = $pdo->prepare("DELETE FROM todo WHERE id = :id;");
    }
    $sql->bindParam(":id", $id);
    $sql->execute();
    header("Location: index.php");
    exit;
} else {
    header("Location: index.php", true, 500);
}


?>


