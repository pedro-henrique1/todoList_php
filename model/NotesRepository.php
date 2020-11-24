<?php


//include_once '../controller/ControllerCadastro/NotesController.php';


/**
 * @param $title
 * @param $description
 * @param $data
 * @return mixed
 */


function inserir($title, $description, $data)
{
    echo $title, $description, $data;

    $PDO = include '../model/database/connection.php';

    $sql = "INSERT INTO todo VALUES (:title, :description, :date )";
    $insertPrepare = $PDO->prepare($sql);
    return $insertPrepare->execute(
        [
            ':title' => $title,
            ':description' => $description,
            ':date' => $data,
        ]
    );
}


