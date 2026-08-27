<?php

require_once __DIR__ . '/../../Core/Database.php';

class ClasseRepository
{
    public static function getToutesLesClasses(): array
    {
        $sql = "SELECT id, nom FROM classes ORDER BY nom";
        $statement = Database::getInstance()->getConnexion()->query($sql);
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}