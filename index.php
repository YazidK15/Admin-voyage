<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <section id="nav">
        <div id="user-online">
            <img id="online-icon" src="./assets/images/user.png" alt="">
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
                <img id="travel" src="./assets/images/travel.png" alt="logo agence">
                <h1>SunCoast</h1>
            </div>
            <div id="header-container">
                <div id="header-icons">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="material-symbols-outlined">help</span>
                    <span class="material-symbols-outlined">mail</span>
                </div>
                <div id="header-connect">
                    <img id="user" src="./assets/images/user.png" alt="photo d'un user">
                    <p>Yazid Kassous</p>
                </div>
            </div>
        </header>
        <main>
            <h3>Dashboard</h3>
            <div class="box">
                <div class="box-container">
                    <span class="material-symbols-outlined">person</span>
                    <p>Clients</p>
                    <p></p>
                </div>
                <div class="box-container">
                    <span class="material-symbols-outlined">beach_access</span>
                    <p>Destinations</p>
                </div>
                <div class="box-container">
                    <span class="material-symbols-outlined">description</span>
                    <p>Réservations</p>
                </div>
                <div class="box-container">
                    <span class="material-symbols-outlined">credit_score</span>
                    <p>Paiements reçus</p>
                </div>
            </div>
        </main>
    </section>
<script>

function redirectToClients() {
    window.location.replace('./controllers/clientsController.php');
}

function redirectToDestinations() {
    window.location.replace('./controllers/destinationsController.php');
}

function redirectToReservation () {
    window.location.replace('./controllers/reservationsController.php');
}

function redirectToPaiements() {
    window.location.replace('./controllers/paiementsController.php');
}
</script> 
</body>
</html>