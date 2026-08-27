<?php

require_once __DIR__ . '/../Model/Repository/InscriptionRepository.php';
require_once __DIR__ . '/../Model/Repository/ClasseRepository.php';

class InscriptionController
{
    public function index(): void
    {
        $parPage = 5;
        $page = 1;
        if (isset($_GET['page'])) {
            $page = (int) $_GET['page'];
        }
        $offset = ($page - 1) * $parPage;

        $pagePrecedente = $page - 1;
        if ($pagePrecedente < 1) {
            $pagePrecedente = 1;
        }
        $pageSuivante = $page + 1;
        $afficherPrecedent = ($page > 1);

        $recherche = '';
        if (isset($_GET['recherche']) && $_GET['recherche'] !== '') {
            $recherche = trim($_GET['recherche']);
        }

        $classeId = '';
        if (isset($_GET['classe_id']) && $_GET['classe_id'] !== '') {
            $classeId = $_GET['classe_id'];
        }

        $statut = '';
        if (isset($_GET['statut']) && $_GET['statut'] !== '') {
            $statut = $_GET['statut'];
        }

        $classes = ClasseRepository::getToutesLesClasses();
        $classesPourAffichage = [];
        foreach ($classes as $classe) {
            $estSelectionnee = false;
            if ($classeId !== '' && (string) $classeId === (string) $classe->id) {
                $estSelectionnee = true;
            }
            $classesPourAffichage[] = [
                'id' => $classe->id,
                'nom' => $classe->nom,
                'selected' => $estSelectionnee,
            ];
        }

        $statutsDisponibles = [
            ['valeur' => 'EN ATTENTE', 'libelle' => 'En attente', 'selected' => ($statut === 'EN ATTENTE')],
            ['valeur' => 'INSCRIT', 'libelle' => 'Inscrit', 'selected' => ($statut === 'INSCRIT')],
            ['valeur' => 'NON AFFECTE', 'libelle' => 'Non affecté', 'selected' => ($statut === 'NON AFFECTE')],
        ];

        $inscriptions = InscriptionRepository::getAllInscriptions($parPage, $offset, $recherche, $statut, $classeId);

        require __DIR__ . '/../views/eleves-inscriptions.html.php';
    }
}