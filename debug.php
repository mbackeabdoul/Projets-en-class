<?php

require_once __DIR__ . '/src/Core/Database.php';

$pdo = Database::getInstance()->getConnexion();

$statement = $pdo->query("
    SELECT column_name, data_type
    FROM information_schema.columns
    WHERE table_name = 'classes'
");

var_dump($statement->fetchAll(PDO::FETCH_ASSOC));

// Pareil pour inscriptions, au cas où
$statement2 = $pdo->query("
    SELECT column_name, data_type
    FROM information_schema.columns
    WHERE table_name = 'inscriptions'
");

var_dump($statement2->fetchAll(PDO::FETCH_ASSOC));