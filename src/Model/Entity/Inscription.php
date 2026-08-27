<?php

require_once __DIR__ . '/Eleve.php';
require_once __DIR__ . '/Classe.php';
require_once __DIR__ . '/Responsable.php';
require_once __DIR__ . '/StatuInscription.php';

class Inscription{
    private ?int $id = null;
    private Eleve $eleve;
    private Classe $classe;
    private StatuInscription $statut;
    public function __construct(Eleve $eleve,Classe $classe,StatuInscription $statut){
        $this->eleve = $eleve;
        $this->classe = $classe;
        $this->statut = $statut;
    }

    public function getId(): ?int{
        return $this->id;
    }

    public function getEleve(): Eleve{
        return $this->eleve;
    }

    public function getClasse(): Classe{
        return $this->classe;
    }

    public function getStatut():StatuInscription{
        return $this->statut;
    }

    public function setId(int $id): void{
        $this->id = $id;
    }

  
    public static function toEntity(object $ligneBase):Inscription{$responsable = new Responsable(
            $ligneBase->responsable_prenom,
            $ligneBase->responsable_nom,
            $ligneBase->responsable_telephone,
            (int) $ligneBase->responsable_id
        );
    $eleve = new Eleve($ligneBase->eleve_prenom, $ligneBase->eleve_nom, $ligneBase->matricule,$responsable,$ligneBase->eleve_id);
        $classe = new Classe(
        $ligneBase->classe,
        $ligneBase->classe_id
        );
        $statut = StatuInscription::from($ligneBase->statut);

        $inscription = new Inscription($eleve, $classe, $statut);
        $inscription->setId((int) $ligneBase->id);
        return $inscription;
    }
}