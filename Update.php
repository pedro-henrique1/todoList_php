<?php

require_once "./connection.php";


$status = 0;


$sql = $pdo->prepare("UPDATE todo SET status = :status");
$sql->bindParam(':status', $status);
$sql->execute();
header("Location: /index.php");
exit(302);
