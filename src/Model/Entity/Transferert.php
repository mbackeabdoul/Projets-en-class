<?php

class Transfert {
    private ?int $id;
    private ?Classe $classe; 
    private string $typeTransfert;
    private string $etablissementdorigine;
    private string $etablissementFinal;
    private ?DateTime $dateTransfert;

    public function __construct(?Classe $classe = null, string $typeTransfert, string $etablissementdorigine, string $etablissementFinaln , ?DateTime $dateTransfert = null,?int $id = null
    ) {
        $this->id = $id;
        $this->typeTransfert = $typeTransfert;
        $this->etablissementdorigine = $etablissementdorigine;
        $this->etablissementFinal = $etablissementFinal;
        $this->dateTransfert = $dateTransfert;
    }

    public function getId(): ?int {
        return $this->id;
    }

 
 
    public function getTypeTransfert(): string {
        return $this->typeTransfert;
    }

    public function getEtablissementOrigine(): string {
        return $this->etablissementdorigine;
    }


    public function getEtablissementFinal(): string {
        return $this->etablissementFinal;
    }

    public function setEtablissementFinal(string $etablissementFinal):void {
        $this->etablissementFinal = $etablissementFinal;
    }
}