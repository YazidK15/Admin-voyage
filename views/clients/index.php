<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../index.css">
    <title>Liste des clients</title>
    <style>
        html {
            height: 100%;
        }
        body {
            display: flex;
            height: 100%;
        }
        #title_description {
            margin-top: 20px;
            text-align: center;
        }
        table {
            color: white; 
            border-spacing: 10px; 
            border: 3px solid #232B4C;
            background-color: #54638add;
            border-radius : 5px;
        }
        #table-container {
            height: 500px;
            width: 90%;
            overflow-y: auto;
            margin: 30px auto;
        }
        th, td {
            padding: 10px; 
            text-align: center;
        }
        thead th {
            background-color: #232B4C;
            color: white;
            border-radius : 5px;
        }
        #btn-add {
            padding: 10px;
            color: white;
            background-color: #232B4C;
            border-radius : 5px;
            border: 2px solid #232B4C;
        }
        td button{
            border : none;
            background-color: #54638add;
            border-radius : 5px;
            cursor: pointer;
        }
        td span {
            color:white;
        }
    </style>
</head>
<body>
    <section id="nav">
        <div id="user-online">
            <img id="online-icon" src="../assets/images/user.png" alt="">
            <div>
                <p>Yazid Kassous</p>
                <div id="online">
                    <span class="material-symbols-outlined">sensors</span>
                    <span>Online</span>
                </div>
            </div>
        </div>
        <h1>Admin</h1>
            <div class="btn-container" onclick="redirectToClients()"> 
                <span class="material-symbols-outlined">person</span>  
                <button class="btn-categorie">Clients</button>
            </div>
            <div class="btn-container" onclick="redirectToDestinations()">
                <span class="material-symbols-outlined">beach_access</span>
                <button class="btn-categorie">Destinations</button>
            </div>
            <div class="btn-container" onclick="redirectToReservations()">
                <span class="material-symbols-outlined">import_contacts</span>
                <button class="btn-categorie">Réservations</button>
            </div>
            <div class="btn-container" onclick="redirectToPaiements()">
                <span class="material-symbols-outlined">shopping_cart_checkout</span>
                <button class="btn-categorie">Paiements</button>
            </div>
    </section>
    <section id="pannel">
        <header>
            <div id="name">
                <img id="travel" src="../assets/images/travel.png" alt="logo agence">
                <h1>SunCoast</h1>
            </div>
            <div id="header-container">
                <div id="header-icons">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="material-symbols-outlined">help</span>
                    <span class="material-symbols-outlined">mail</span>
                </div>
                <div id="header-connect">
                    <img id="user" src="../assets/images/user.png" alt="photo d'un user">
                    <p>Yazid Kassous</p>
                </div>
            </div>
        </header>
        <main>
            <h1 id="title_description">Liste des clients</h1>
            <div id="table-container">
            <table>
                <thead>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Détails</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </thead>
                <tbody>
                    <?php
                        foreach($clients as $client){
                            echo "<tr>";
                                echo "<td>".$client["id"]."</td>";
                                echo "<td>".$client["nom"]."</td>";
                                echo "<td>".$client["prenom"]."</td>";
                                echo "<td>".$client["adresse"]."</td>";
                                echo "<td>".$client["email"]."</td>";
                                echo "<td>".$client["telephone"]."</td>";
                                echo "<td> <button onclick='redirectToDetailsClient(" . $client['id'] . ")'><span class=\"material-symbols-outlined\">person</span></button></td>";
                                echo "<td> <button onclick='redirectToEditClient(". $client['id'] .")'><span class=\"material-symbols-outlined\">edit</span></button> </td>";
                                echo "<td> <button onclick='redirectToDeleteClient(". $client['id'] .")'><span class=\"material-symbols-outlined\">delete</span></button> </td>";
                            echo "</tr>";
                        }
                    ?>
                    <tr>
                        <td colspan="9" style="text-align: center;">
                            <button id="btn-add" onclick="redirectToCreateClient()">Ajouter un client</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div> 
        </main>
    </section>

<script type="text/javascript">
    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "create"
    function redirectToCreateClient() {
        window.location.replace("../Controllers/clientsController.php?action=create");
    }
    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "detail"
    function redirectToDetailsClient(clientId){
        window.location.replace('../Controllers/clientsController.php?action=details&id=' +clientId)
    }
    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "edit"
    function redirectToEditClient(clientId){
        window.location.replace('../Controllers/clientsController.php?action=edit&id=' +clientId)
    }
    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "delete"
    function redirectToDeleteClient(clientId){
        window.location.replace('../Controllers/clientsController.php?action=delete&id=' +clientId)
    }
    

function redirectToClients() {
    window.location.replace('../controllers/clientsController.php');
}

function redirectToDestinations() {
    window.location.replace('../controllers/destinationsController.php');
}

function redirectToReservation () {
    window.location.replace('../controllers/reservationsController.php');
}

function redirectToPaiements() {
    window.location.replace('../controllers/paiementsController.php');
}
</script> 
</body>
</html>