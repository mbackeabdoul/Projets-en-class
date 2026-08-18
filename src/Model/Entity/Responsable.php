<?php

class Responsable{
    private ?int $id;
    private string $prenom;
    private string $nom;
    private string $numero;
    private string $adresse;

    public function __construct(string $prenom, string $nom, string $numero, string $adresse, ?int $id = null){
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numero = $numero;
        $this->adresse = $adresse;
    }
    public function getId(): ?int {
        return $this->id;
    }

    public function getPrenom(): string{
        return $this->prenom;
    }

    public function getNom(): string{
        return $this->nom;
    }

    public function getNumero(): string{
        return $this->numero;
    }
public function getAdresse(): string {
        return $this->adresse;
    }
    public function setNom(string $nom):void{
            $this->nom = $nom;
    }
     public function seId(string $id):void{
            $this->id = $id;
    }
}