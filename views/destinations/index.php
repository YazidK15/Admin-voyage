<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Liste des destinations</title>
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
        #btn-add {
            padding: 10px;
            color: white;
            background-color: #232B4C;
            border: 1px solid white;
        }
        td button{
            border : none;
            background-color: #304067;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Disponibilité</th>
        <th>Catégorie</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </thead>
    <tbody>
        <?php
            foreach($destinations as $destination){
                echo "<tr>";
                    echo "<td>".$destination["id"]."</td>";
                    echo "<td>".$destination["nom"]."</td>";
                    echo "<td>".$destination["description"]."</td>";
                    echo "<td>".$destination["prix"]."</td>";
                    echo "<td>".$destination["disponibilite"]."</td>";
                    echo "<td>".$destination["categorie"]."</td>";
                    echo "<td> <button onclick='redirectToEditDestination(". $destination['id'] .")'><span class=\"material-symbols-outlined\">edit</span></button> </td>";
                    echo "<td> <button onclick='redirectToDeleteDestination(". $destination['id'] .")'><span class=\"material-symbols-outlined\">delete</span></button> </td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan="9" style="text-align: center;">
                <button id="btn-add" onclick="redirectToCreateDestination()">Ajouter une destination</button>
            </td>
        </tr>
    </tbody>
</table>


<script type="text/javascript">
    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "create"
    function redirectToCreateDestination() {
        window.location.replace("../Controllers/destinationsController.php?action=create");
    }

    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "edit"
    function redirectToEditDestination(clientId){
        window.location.replace('../Controllers/destinationsController.php?action=edit&id=' +clientId)
    }

    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "delete"
    function redirectToDeleteDestination(clientId){
        window.location.replace('../Controllers/destinationsController.php?action=delete&id=' +clientId)
    }
    
</script>

</body>
</html>
