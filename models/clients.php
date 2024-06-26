<?php

require_once 'bdd.php';

// Fonction pour lire des informations dans la base de données 
function fetchClients () {
    $bdd =  new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT id, nom, prenom, adresse, email, telephone FROM clients;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter des informations dans la base de données
function insertClient ($nom, $prenom, $adresse, $email, $telephone){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('INSERT INTO clients (nom, prenom, adresse, email, telephone) VALUES (?,?,?,?,?);');
    $request-> execute([$nom, $prenom, $adresse, $email, $telephone]);
} 

function getClientByID ($id){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT id, nom, prenom, adresse, email, telephone FROM clients WHERE id =?;');
    $request-> execute([$id]);
    return $request->fetch(PDO::FETCH_ASSOC);
}

function updateClient ($id, $nom, $prenom, $adresse, $email, $telephone){
    $bdd= new Bdd();
    $conn= $bdd->connect();
    $request= $conn->prepare('UPDATE clients SET Nom = ?, Prenom = ?, Adresse = ?, Email = ?, telephone = ? WHERE ID = ?');
    $request->execute([$nom, $prenom, $adresse, $email, $telephone, $id]);
}

function deleteClient ($id){
    $bdd= new Bdd();
    $conn= $bdd->connect();
    $request= $conn->prepare('DELETE FROM clients WHERE ID =?');
    $request->execute([$id]);
}
