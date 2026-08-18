<?php
require_once dirname (__DIR__)."/Model/Repository/InscriptionRepository.php";
class EleveController{
    public function index() {
        $eleves = InscriptionRepository::getAllInscriptionsAndEleves();

    }
}