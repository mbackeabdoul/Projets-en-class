<?php

class Database{
    private static ?Database $instance = null;
    private PDO $connexion;
    private string $baseDeDonnee;

    private function __construct(){
        try {
            $this->connexion = new PDO(
          
}