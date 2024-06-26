<?php

require_once 'bdd.php';

// Fonction pour lire des informations dans la base de données 
function fetchClients () {
    $bdd =  new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT id, client_id, montant, date_paiement, methode_paiement, statut FROM paiements;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter des informations dans la base de données
function insertClient ($client_id, $montant, $date_paiement, $methode_paiement, $statut){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('INSERT INTO paiements (client_id, montant, date_paiement, methode_paiement, statut) VALUES (?,?,?,?,?);');
    $request-> execute([$client_id, $montant, $date_paiement, $methode_paiement, $statut]);
} 

function getClientByID ($id){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT id, client_id, montant, date_paiement, methode_paiement, statut FROM paiements WHERE id =?;');
    $request-> execute([$id]);
    return $request->fetch(PDO::FETCH_ASSOC);
}

function updatePaiement ($id, $client_id, $montant, $date_paiement, $methode_paiement, $statut){
    $bdd= new Bdd();
    $conn= $bdd->connect();
    $request= $conn->prepare('UPDATE paiements SET client_id = ?, montant = ?, date_paiement = ?, methode_paiement = ?, statut = ? WHERE ID = ?');
    $request->execute([$client_id, $montant, $date_paiement, $methode_paiement, $statut, $id]);
}

function deleteClient ($id){
    $bdd= new Bdd();
    $conn= $bdd->connect();
    $request= $conn->prepare('DELETE FROM paiements WHERE ID =?');
    $request->execute([$id]);
}