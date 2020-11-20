<?php



use PDO;

class Conection
{
    public static function creatConnection(): \PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';
        return new PDO('sqlite:' . $databasePath);
    }

}
