<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../index.css">
    <title>Modifier un client</title>
    <style>
        #title_description {
            text-align: center;
            margin-top: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 30px auto;
            color: white; 
            width: 90%;
            border: 3px solid #232B4C;
            background-color: #54638add;
            border-radius : 5px;
        }
        label {
            margin: 7px 0px;
        }
        input {
            margin-bottom: 20px;
            width: 250px;
            padding: 5px;
            text-align: center;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"] {
            border-radius: 5px;
            margin-top: 40px;
            background-color: #232B4C;
            color: white;
            height: 40px;
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
            <h1 id="title_description">Modifier la fiche du client</h1>
                <form action="../controllers/clientsController.php?action=update" method="post">
                    <input type="hidden" name="id" value="<?php echo $client['id']?>">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Renseignez le nom du client" value="<?php echo $client['nom']?>" required>
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Renseignez le prénom du client" value="<?php echo $client['prenom']?>" required>
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" id="adresse" placeholder="Renseignez l'adresse du client" value="<?php echo $client['adresse']?>" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Renseignez l'email du client" value="<?php echo $client['email']?>" >
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" id="telephone" placeholder="Renseignez le téléphone du client" value="<?php echo $client['telephone']?>" >
                    <input type="submit" value="Envoyer">
                </form>
        </main>
    </section>
<script type="text/javascript">

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