<?php

require_once 'connection.php';


$title = $_POST["title"];
$description = $_POST["description"];
$data = date("Y-m-d H:i:s");

if ($title === "" || $description === "" || $data === "") {
    echo "preencha corretamente";
     header("Location: /index.php");
    exit();
}

$sql = "INSERT INTO todo (title, description, date ) VALUES (:title, :description, :date );";


$state = $pdo->prepare($sql);
$state->bindParam(':title', $title);
$state->bindParam(':description', $description);
$state->bindParam(':date', $data);
$insert = $state->execute();
header("Location: /index.php");
exit();
