<?php
class AnneeScolaire{
    private ?int $id;
    private ?string $annee;

    public function __construct(?string $annee = null, ?int $id = null){
        $this->id = $id;
        $this->annee = $annee;
    }
    public function getId(): ?int{
        return $this->id;
    }
    public function getAnnee(): ?string{
        return $this->annee;
    }
}
