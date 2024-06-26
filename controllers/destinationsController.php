<?php 
require_once '../models/destinations.php';

// Redirige automatiquement vers la page index client 
if (!isset($_GET['action'])){
    $destinations = fetchClients();
    include '../Views/destinations/index.php';
}

// Quand on clique sur un bouton présent sur la page 
else{
    // Quand l'action est "create" on est redirigé vers la page create.php
    // Le tableau $_GET contient les valeurs transmis dans l'url 
    if ($_GET["action"] == "create") {
        include '../views/destinations/create.php';
    }

    // Quand l'action est "insert" avec la méthode POST on transmet des données
    if ($_GET["action"] == "insert"){
        // Le tableau $_POST contient des valeurs non transmises dans l'url 
        var_dump($_POST);
        $nom = $_POST["nom"];
        $description = $_POST["description"];
        $prix = $_POST["prix"];
        $disponibilite = $_POST["disponibilite"];
        $categorie = $_POST["categorie"];

        // Ajout des données dans la bdd en faisant appel à la fonction insertClient
        insertDestination($nom, $description, $prix, $disponibilite, $categorie);

        // Redirige vers la page clientsController pour afficher la liste des clients
        header("Location: destinationsController.php");
    }

    if ($_GET["action"] == 'edit') {
        $id = $_GET["id"];
        $destination= getClientById($id);
        include '../views/destinations/edit.php';
    }
    
    if ($_GET["action"] == "update") {
        var_dump($_POST);
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $description = $_POST["description"];
        $prix = $_POST["prix"];
        $disponibilite = isset($_POST['disponibilite']) ? true : false;
        $categorie = $_POST["categorie"];
        
        updateDestination($id, $nom, $description, $prix, $disponibilite, $categorie);

        // Redirige vers la fiche du client après la modification
        header("Location: destinationsController.php");
    }


    if($_GET["action"] == "delete") {
        $id = $_GET["id"];
        deleteDestination($id);
        header("Location: destinationsController.php");
    }
}