<?php

require_once("../controller/ControllerCadastro/Notas.php");

use  todoList\model\database\connection;
use  todoList\controller\ControllerCadastro\Notas;

class insert
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = connection::CreatConnection();
    }

    public function Inserir(Notas $Notas)
    {
        $sql = "INSERT INTO todo VALUES (:title, :description, :date )";
        $prepare = $this->connection->prepare($sql);
        return $prepare->execute(
            [
                ':title' => $Notas->getTitle(),
                ':description' => $Notas->getDescription(),
                ':date' => $Notas->getDate(),
            ]
        );
    }


}


