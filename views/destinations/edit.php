<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'une destination'</title>
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
<form action="../controllers/destinationsController.php?action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $destination['id']?>">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" placeholder="Renseignez le nom de la destination'" value="<?php echo $destination['nom']?>" required>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" placeholder="Renseignez la description de la destination" value="<?php echo $destination['description']?>" required>
    <label for="prix">Prix</label>
    <input type="text" name="prix" id="prix" placeholder="Renseignez le prix de la destination" value="<?php echo $destination['prix']?>" required>
    <label for="disponibilite">Disponibilité</label>
    <input type="checkbox" name="disponibilite" id="disponibilite" value="1" <?php echo $destination['disponibilite'] ? 'checked' : ''; ?> >
    <label for="categorie">Catégorie</label>
    <input type="text" name="categorie" id="categorie" placeholder="Renseignez la catégorie" value="<?php echo $destination['categorie']?>" >
    <input type="submit" value="Envoyer">
</form>
    
</body>
</html>