<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Liste des paiements</title>
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
        <th>ID Client</th>
        <th>Montant</th>
        <th>Date</th>
        <th>Méthode</th>
        <th>Statut</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </thead>
    <tbody>
        <?php
            foreach($clients as $client){
                echo "<tr>";
                    echo "<td>".$client["id"]."</td>";
                    echo "<td>".$client["client_id"]."</td>";
                    echo "<td>".$client["montant"]."</td>";
                    echo "<td>".$client["date_paiement"]."</td>";
                    echo "<td>".$client["methode_paiement"]."</td>";
                    echo "<td>".$client["statut"]."</td>";
                    echo "<td> <button onclick='redirectToEditPaiement(". $client['id'] .")'><span class=\"material-symbols-outlined\">edit</span></button> </td>";
                    echo "<td> <button onclick='redirectToDeletePaiement(". $client['id'] .")'><span class=\"material-symbols-outlined\">delete</span></button> </td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan="9" style="text-align: center;">
                <button id="btn-add" onclick="redirectToCreatePaiement()">Ajouter un paiement</button>
            </td>
        </tr>
    </tbody>
</table>


<script type="text/javascript">
    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "create"
    function redirectToCreatePaiement() {
        window.location.replace("../Controllers/paiementsController.php?action=create");
    }

    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "edit"
    function redirectToEditPaiement(clientId){
        window.location.replace('../Controllers/paiementsController.php?action=edit&id=' +clientId)
    }

    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "delete"
    function redirectToDeletePaiement(clientId){
        window.location.replace('../Controllers/paiementsController.php?action=delete&id=' +clientId)
    }
    
</script>

</body>
</html>
