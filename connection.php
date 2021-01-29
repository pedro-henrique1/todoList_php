<?php

require  'config.php';

try {
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
} catch (PDOException $e) {
    echo 'erro' . $e->getMessage();
}