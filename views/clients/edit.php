<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un client</title>
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
    
</body>
</html>
