<?php
require_once __DIR__ . '/../../Core/Database.php';
require_once __DIR__ . '/../Entity/Eleve.php';

class EleveRepository{
    private static ?PDO $connexion = null;
    private static function getConnexion(): PDO{
        if(EleveRepository::$connexion === null){
            $db=Database::getInstance();
            // var_dump($db);
            EleveRepository::$connexion = $db->getConnexion();
        }
        return EleveRepository::$connexion;
    }
    public static function recupererTousLesEleves():array{
        $sql = "SELECT e.id, e.matricule, e.nom, e.prenom,
        r.nom AS resp_nom, r.prenom AS resp_prenom, r.telephone AS resp_telephone
        FROM eleves e
        INNER JOIN responsables r ON r.id =e.responsable_id
        ORDER BY e.nom ASC";
        $statement = EleveRepository::getConnexion()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}