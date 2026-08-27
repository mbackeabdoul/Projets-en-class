<?php

require_once __DIR__ . '/Responsable.php';

class Eleve{
    private ?int $id;
    private string $prenom;
    private string $nom;
    private string $matricule;
    private ?Responsable $responsable;

    public function __construct(string $prenom, string $nom, string $matricule,?Responsable $responsable = null,?int $id = null){
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->matricule = $matricule;
        $this->responsable = $responsable;
    }

    public function getId():?int{
        return $this->id;
    }

    public function getResponsable():?Responsable{
        return $this->responsable;
    }

    public function getPrenom(): string{
        return $this->prenom;
    }

    public function getNom(): string{
        return $this->nom;
    }

    public function getMatricule(): string{
        return $this->matricule;
    }
    public function setPrenom(string $prenom):void{
        $this->prenom = $prenom;
    }
    public function setNom(string $nom): void{
        $this->nom = $nom;
    }
}