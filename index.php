<script type="text/javascript">

    function redirectToClients() {
        openIframe('./controllers/clientsController.php');
    }

    function redirectToDestinations() {
        openIframe('./controllers/destinationsController.php');
    }

    function redirectToReservation () {
        openIframe('./controllers/reservationsController.php');
    }

    function redirectToPaiements() {
        openIframe('./controllers/paiementsController.php');
    }


    function openIframe(url) {
        document.getElementById('iframe').src = url;
        document.getElementById('iframeContainer').style.display = 'block';
    }
    
    function closeIframe() {
        document.getElementById('iframeContainer').style.display = 'none';
    }

</script> 

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
    <section class="iframe">
        <img id="dashboard" src="./assets/images/oui.png" alt="screen pannel admin">
        <div id="iframeContainer">
            <button id="closeButton" onclick="closeIframe()">X</button>
            <iframe id="iframe" src=""></iframe>
        </div>
    </section>
</body>
</html>