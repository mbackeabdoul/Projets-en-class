<?php

class Database {

private static ?Database $instance = null;
private PDO $connexion;

private function __construct() {
try {
    $this->connexion = new PDO(
    "pgsql:host=localhost;port=5432;dbname= xds_etudiant",
    "xds_user",
    "passer123"
);
} catch (PDOException $e) {
die("Erreur de connexion : " . $e->getMessage());
}
}
public static function getInstance(): Database {
if (Database::$instance === null) {
Database::$instance = new Database();
}
return Database::$instance;
}

public function getConnexion(): PDO {
return $this->connexion;

}

public static function query(string $sql, bool $single = true):mixed {
$query = Database::getInstance()->getConnexion()->query($sql);
return $single ? $query->fetch() : $query->fetchAll(PDO::FETCH_OBJ);
}

    private static function prepare(string $sql, array $datas): PDOStatement {
    $prepare = Database::getInstance()->getConnexion()->prepare($sql);
    $prepare->execute($datas);
    return $prepare;
    }

public static function executeQuery(string $sql, array $datas, bool $single = true): mixed {
$statement = Database::prepare($sql, $datas);
return $single ? $statement->fetch() : $statement->fetchAll(PDO::FETCH_OBJ);
}

public static function executeUpdate(string $sql, array $datas): int|string {
$statement = Database::prepare($sql, $datas);
if (str_starts_with(strtoupper(trim($sql)), 'INSERT')) {
return (int) Database::getInstance()->getConnexion()->lastInsertId();
}
return $statement->rowCount();
}

public static function getAllData(string $tableName): array {
$sql = "SELECT * FROM $tableName";
return Database::query($sql, false);
}
}

