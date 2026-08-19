<?php

class EleveController{
    public static function index(): void
    {
        // $eleves = InscriptionRepository::getAllInscriptionsAndEleves(2);
        require_once dirname(__DIR__) . "/views/eleves-inscriptions.html.php";
    }
} 

EleveController::index();