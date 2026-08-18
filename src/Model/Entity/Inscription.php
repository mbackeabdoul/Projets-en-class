<?php

class Inscription {
    private ?int $id;
    private ?Eleve $eleve;
    private ?AnneeScolaire $anneeScolaire;
    private ?Classe $classe;
    private ?Utilisateur $utilisateur;

    public function __construct(?Eleve $eleve = null, ?AnneeScolaire $anneeScolaire = null,?Classe $classe = null,?Utilisateur $utilisateur = null,?int $id = null){
        $this->id = $id;
        $this->eleve = $eleve;
        $this->anneeScolaire = $anneeScolaire;
        $this->classe = $classe;
        $this->utilisateur = $utilisateur;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getEleve():?Eleve {
        return $this->eleve;
    }

    public function getAnneeScolaire():?AnneeScolaire {
        return $this->anneeScolaire;
    }
    public function getClasse():?Classe {
        return $this->classe;
    }
    public function getUtilisateur():?Utilisateur {
        return $this->utilisateur;
    }
}