<?php 
require_once '../models/paiements.php';

// Redirige automatiquement vers la page index client 
if (!isset($_GET['action'])){
    $clients = fetchClients();
    include '../Views/paiements/index.php';
}

// Quand on clique sur un bouton présent sur la page 
else{
    // Quand l'action est "create" on est redirigé vers la page create.php
    // Le tableau $_GET contient les valeurs transmis dans l'url 
    if ($_GET["action"] == "create") {
        include '../views/paiements/create.php';
    }

    // Quand l'action est "insert" avec la méthode POST on transmet des données
    if ($_GET["action"] == "insert"){
        // Le tableau $_POST contient des valeurs non transmises dans l'url 
        var_dump($_POST);
        $client_id = $_POST["client_id"];
        $montant = $_POST["montant"];
        $date_paiement = $_POST["date"];
        $methode_paiement = $_POST["methode"];
        $statut = $_POST["statut"];

        // Ajout des données dans la bdd en faisant appel à la fonction insertClient
        insertClient($client_id, $montant, $date_paiement, $methode_paiement, $statut);

        // Redirige vers la page clientsController pour afficher la liste des clients
        header("Location: paiementsController.php");
    }

    if ($_GET["action"] == 'edit') {
        $id = $_GET["id"];
        $client= getClientById($id);
        include '../views/paiements/edit.php';
    }
    
    if ($_GET["action"] == "update") {
        var_dump($_POST);
        $id = $_POST["id"];
        $client_id = $_POST["client_id"];
        $montant = $_POST["montant"];
        $date_paiement = $_POST["date"];
        $methode_paiement = $_POST["methode"];
        $statut = $_POST["statut"];
        
        updatePaiement($id, $client_id, $montant, $date_paiement, $methode_paiement, $statut);

        // Redirige vers la fiche du client après la modification
        header("Location: paiementsController.php");
    }


    if($_GET["action"] == "delete") {
        $id = $_GET["id"];
        deleteClient($id);
        header("Location: paiementsController.php");
    }
}