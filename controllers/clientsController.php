<?php 
require_once '../models/clients.php';

// Redirige automatiquement vers la page index client 
if (!isset($_GET['action'])){
    $clients = fetchClients();
    include '../Views/clients/index.php';
}

// Quand on clique sur un bouton présent sur la page 
else{
    // Quand l'action est "create" on est redirigé vers la page create.php
    // Le tableau $_GET contient les valeurs transmis dans l'url 
    if ($_GET["action"] == "create") {
        include '../views/clients/create.php';
    }

    // Quand l'action est "insert" avec la méthode POST on transmet des données
    if ($_GET["action"] == "insert"){
        // Le tableau $_POST contient des valeurs non transmises dans l'url 
        var_dump($_POST);
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];

        // Ajout des données dans la bdd en faisant appel à la fonction insertClient
        insertClient($nom, $prenom, $adresse, $email, $telephone);

        // Redirige vers la page clientsController pour afficher la liste des clients
        header("Location: clientsController.php");
    }
    
    // Quand l'action est "details" on est redirigé vers la page details.php 
    if ($_GET ["action"] == "details"){
        // Récupère l'id dans l'url de la page et l'assigne à la variable $id
        $id = $_GET["id"];
        // Appel la fonction getClientByID et assigne les informations du client à la variable $client
        $client = getClientByID($id);
        include '../views/clients/details.php';
    }

    if ($_GET["action"] == 'edit') {
        $id = $_GET["id"];
        $client= getClientById($id);
        include '../views/clients/edit.php';
    }
    
    if ($_GET["action"] == "update") {
        var_dump($_POST);
        $id=$_POST["id"];
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $adresse=$_POST["adresse"];
        $email=$_POST["email"];
        $telephone=$_POST["telephone"];
        updateClient($id, $nom, $prenom, $adresse, $email, $telephone);

        // Redirige vers la fiche du client après la modification
        header("Location: clientsController.php?action=details&id=".$id);
    }

    if($_GET["action"] == "delete") {
        $id = $_GET["id"];
        deleteClient($id);
        header("Location: clientsController.php");
    }
}


