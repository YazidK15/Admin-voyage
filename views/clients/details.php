<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du client</title>
    <style>
        table {
            color: white; 
            border-collapse: separate; /* Séparation des bordures des cellules */
            border-spacing: 10px;
        }
        th, td {
            padding: 10px; 
            text-align: center;
        }
        thead th {
            background-color: #232B4C;
            border: 1px solid white;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Email</th>
            <th>Numéro de téléphone</th>
        </thead>
        <tbody>
            <td><?php echo $client['nom'] ?></td>
            <td><?php echo $client['prenom'] ?></td>
            <td><?php echo $client['adresse'] ?></td>
            <td><?php echo $client['email'] ?></td>
            <td><?php echo $client['telephone'] ?></td>
        </tbody>
    </table>    
</body>
</html>

