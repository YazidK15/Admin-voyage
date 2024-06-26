<?php

require_once 'bdd.php';

// Fonction pour lire des informations dans la base de données 
function fetchClients () {
    $bdd =  new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT id, nom, description, prix, disponibilite, categorie FROM destinations;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter des informations dans la base de données
function insertDestination ($nom, $description, $prix, $disponibilite, $categorie){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('INSERT INTO destinations (nom, description, prix, disponibilite, categorie) VALUES (?,?,?,?,?);');
    $request-> execute([$nom, $description, $prix, $disponibilite, $categorie]);
} 

function getClientByID ($id){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT id, nom, description, prix, disponibilite, categorie FROM destinations WHERE id =?;');
    $request-> execute([$id]);
    return $request->fetch(PDO::FETCH_ASSOC);
    
    // Convertir la valeur de disponibilité en booléen
    if ($destination) {
        $destination['disponibilite'] = $destination['disponibilite'] == 1 ? true : false;
    }
}

function updateDestination ($id, $nom, $description, $prix, $disponibilite, $categorie){
    $bdd= new Bdd();
    $conn= $bdd->connect();
    $request= $conn->prepare('UPDATE destinations SET nom = ?, description = ?, prix = ?, disponibilite = ?, categorie = ? WHERE ID = ?');
    // Convertir en 1 ou 0 pour l'insertion
    $request->execute([$nom, $description, $prix, $disponibilite ? 1 : 0, $categorie, $id]);
}

function deleteDestination ($id){
    $bdd= new Bdd();
    $conn= $bdd->connect();
    $request= $conn->prepare('DELETE FROM destinations WHERE ID =?');
    $request->execute([$id]);
}