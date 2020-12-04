<?php

require_once "TodoInsert.php";
require_once "./Interfaces/TodoInterface.php";

class UserMysql implements TodoInterface
{
    private PDO $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(TodoInsert $u)
    {
        $sql = $this->pdo->prepare("INSERT todo (title, description, date) VALUES (:title, :description,:date );");
        $sql->bindValue(':title', $u->getTitle());
        $sql->bindValue(':description', $u->getDescription());
        $sql->bindValue(':date', $u->getDate());

        $sql->execute();
    }

    public function findAll(): array
    {
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM todo");
        if ($sql->rowCount() > 0) {
            $date = $sql->fetchAll();
            foreach ($date as $item) {
                $u = new TodoInsert();
                $u->setId($item["id"]);
                $u->setTitle($item["title"]);
                $u->setDescription($item["description"]);
                $u->setDate($item["date"]);

                $array[] = $u;
            }
        }
        return $array;
    }

    public function findById($id): TodoInsert|bool
    {
        $sql = $this->pdo->prepare("SELECT * FROM todo WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $u = new TodoInsert();
            $u->setId($data["id"]);
            $u->setTitle($data["title"]);
            $u->setDescription($data["description"]);
            $u->setDate($data["date"]);

            return $u;
        } else {
            return false;
        }
    }

    public function update(TodoInsert $u): bool
    {
        $sql = $this->pdo->prepare("UPDATE todo SET title = :title, description = :description WHERE id = :id");
        $sql->bindValue(':title', $u->getTitle());
        $sql->bindValue(':description', $u->getDescription());
        $sql->execute();
        return true;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}




