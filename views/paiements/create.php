<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un paiement</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-bottom: 10px;
            color: white;
        }
        input {
            margin-bottom: 20px;
            width: 200px;
            padding: 5px;
            text-align: center;
        }
        input[type="submit"] {
            border: 1px solid white;
            margin-top: 40px;
            background-color: #232B4C;
            color: white;
        }
    </style>
</head>
<body>
<form action="../controllers/paiementsController.php?action=insert" method="post">
    <label for="client_id">ID client</label>
    <input type="text" name="client_id" id="client_id" placeholder="Renseignez l'id du client" required>
    <label for="montant">Montant</label>
    <input type="text" name="montant" id="montant" placeholder="Renseignez le montant du paiement" required>
    <label for="montant">Date</label>
    <input type="text" name="date" id="date" placeholder="Renseignez la date du paiement" required>
    <label for="methode">Méthode de paiement</label>
    <input type="text" name="methode" id="methode" placeholder="Renseignez la méthode de paiement" required>
    <label for="statut">Statut du paiement</label>
    <input type="text" name="statut" id="statut" placeholder="Renseignez le statut du paiement">
    <input type="submit" value="Envoyer">
</form>
    
</body>
</html>
