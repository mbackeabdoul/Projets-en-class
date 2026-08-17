<?php

class Classe
{
    private ?int $idClasse;
    private string $nom;

    public function __construct(string $nom, ?int $idClasse = null){
        $this->idClasse = $idClasse;
        $this->nom = $nom;
    }

    public function getIdClasse(): ?int{
        return $this->idClasse;
    }
    public function getNom(): string{
        return $this->nom;
    }
}