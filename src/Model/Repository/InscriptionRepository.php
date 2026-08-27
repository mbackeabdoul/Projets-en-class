<?php

require_once __DIR__ . '/../../Core/Database.php';
require_once __DIR__ . '/../Entity/Inscription.php';

class InscriptionRepository
{
    public static function getAllInscriptions(int $parPage, int $offset, string $recherche, string $statut, string $classeId): array
    {
        $sql = "
            SELECT
                i.id, i.eleve_id, i.classe_id, i.statut,
                e.matricule, e.nom AS eleve_nom, e.prenom AS eleve_prenom,
                c.nom AS classe,
                r.id AS responsable_id, r.nom AS responsable_nom,
                r.prenom AS responsable_prenom, r.telephone AS responsable_telephone
            FROM inscriptions i
            INNER JOIN eleves e ON e.id = i.eleve_id
            INNER JOIN classes c ON c.id = i.classe_id
            INNER JOIN responsables r ON r.id = e.responsable_id
            WHERE 1=1
        ";

        $parametres = [];

        if ($recherche !== '') {
            $sql .= " AND (LOWER(e.nom) LIKE LOWER(:nom) OR LOWER(e.prenom) LIKE LOWER(:prenom)) ";
            $parametres['nom'] = '%' . $recherche . '%';
            $parametres['prenom'] = '%' . $recherche . '%';
        }

        if ($classeId !== '') {
            $sql .= " AND i.classe_id = :classeId ";
            $parametres['classeId'] = $classeId;
        }

        if ($statut !== '') {
            $sql .= " AND i.statut = :statut ";
            $parametres['statut'] = $statut;
        }

        $sql .= " LIMIT $parPage OFFSET $offset ";

        $statement = Database::getInstance()->getConnexion()->prepare($sql);
        $statement->execute($parametres);
        $resultats = $statement->fetchAll(PDO::FETCH_OBJ);

        return array_map([Inscription::class, 'toEntity'], $resultats);
    }
}