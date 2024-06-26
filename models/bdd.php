<?php

// Fonction pour se connecter à la base de données "voyage"
class BDD {
    
    function connect (){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=voyage', 'root', '');  
            return $pdo;
        } catch (PDOException $e) {
            echo 'Une erreur est survenue : '. $e->getMessage();
        }
    }
}