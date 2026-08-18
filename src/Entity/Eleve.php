<?php

require_once __DIR__ . '/Responsable.php';
require_once __DIR__ . '/Classe.php';

class Eleve {
    private ?int $id;
    private ?Responsable $responsable;
    private string $ref;
    private string $prenom;
    private string $nom;
    private string $numero;
    private ?string $adresse;
    private string $matricule;
    private ?Classe $classe;

    public function __construct(string $ref,string $prenom,string $nom, string $numero, string $matricule,?Responsable $responsable = null,?Classe $classe = null,?string $adresse = null, ?int $id = null) {
        $this->id = $id;
        $this->responsable = $responsable;
        $this->ref = $ref;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numero = $numero;
        $this->adresse = $adresse;
        $this->matricule = $matricule;
        $this->classe = $classe;
    }

    public function getId():?int {
        return $this->id;
    }

    public function getResponsable():?Responsable {
        return $this->responsable;
    }

    public function getRef(): string {
        return $this->ref;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function getAdresse(): ?string {
        return $this->adresse;
    }

    public function getMatricule():string {
        return $this->matricule;
    }

    public function getClasse():?Classe {
        return $this->classe;
    }
    public function setPrenom(string $prenom):void {
        $this->prenom = $prenom;
    }

    public function setNom(string $nom):void {
        $this->nom = $nom;
    }

}

