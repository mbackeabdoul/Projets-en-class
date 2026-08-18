<?php

class Inscription {
   private int $id;
    private string $etablissement_dorigine;
    private string $etablissement_final;
    private Inscription $inscription;
    private StatutTransfert $statut;

    public function __construct(
        string $etablissement_dorigine,
        string $etablissement_final,
        Inscription $inscription,
        StatutTransfert $statut
    ) {
        $this->etablissement_dorigine = $etablissement_dorigine;
        $this->etablissement_final = $etablissement_final;
        $this->inscription = $inscription;
        $this->statut = $statut;
    }

public function getId(): int
    {
        return $this->id;
    }

    public function getEtablissemententrant(): string
    {
        return $this->etablissement_final;
    }

    public function getEtablissementSortant(): string
    {
        return $this->etablissement_dorigine;
    }

    public function getInscription(): Inscription
    {
        return $this->inscription;
    }

    public function getStatut(): StatutTransfert
    {
        return $this->statut;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setEtablissemententrant(string $etablissement_final): void
    {
        $this->etablissement_final = $etablissement_final;
    }

    public function setEtablissementSortant(string $etablissement_dorigine): void
    {
        $this->etablissement_dorigine = $etablissement_dorigine;
    }

    public function setStatut(StatutTransfert $statut): void
    {
        $this->statut = $statut;
    }

    public function setInscription(Inscription $inscription): void
    {
        $this->inscription = $inscription;
    }
}