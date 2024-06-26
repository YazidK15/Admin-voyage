<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un paiement'</title>
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
<form action="../controllers/paiementsController.php?action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $client['id']?>">
    <label for="client_id">ID Client</label>
    <input type="text" name="client_id" id="client_id" placeholder="Renseignez l'ID du client'" value="<?php echo $client['client_id']?>" required>
    <label for="montant">Montant</label>
    <input type="text" name="montant" id="montant" placeholder="Renseignez le montant du paiement" value="<?php echo $client['montant']?>" required>
    <label for="date">Date</label>
    <input type="text" name="date" id="date" placeholder="Renseignez date du paiement" value="<?php echo $client['date_paiement']?>" required>
    <label for="methode">Méthode de paiement</label>
    <input type="text" name="methode" id="methode" placeholder="Renseignez la méthode de paiement" value="<?php echo $client['methode_paiement']?>" >
    <label for="statut">Statut</label>
    <input type="text" name="statut" id="statut" placeholder="Renseignez le statut du paiement" value="<?php echo $client['statut']?>" >
    <input type="submit" value="Envoyer">
</form>
    
</body>
</html>