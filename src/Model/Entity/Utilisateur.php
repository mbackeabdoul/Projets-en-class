<?php
require_once __DIR__ ."/Role.php";
class Utilisateur{
    private ?int $id;
    private string $prenom;
    private string $nom;
    private string $email;
    private string $password;
    private ?Role $role;
    public function __construct(string $prenom, string $nom, string $email, string $password, ?Role $role=null, ?int $id = null){
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
    public function getId(): ?int{
        return $this->id;
    }

    public function getPrenom(): string{
        return $this->prenom;
    }

    public function getNom():string{
        return $this->nom;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getPassword():string
    {     return $this->password;
    }

    public function getRole():?Role{
        return $this->role;
    }
}