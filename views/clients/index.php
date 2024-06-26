<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Liste des clients</title>
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
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Détails</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </thead>
    <tbody>
        <?php
            foreach($clients as $client){
                echo "<tr>";
                    echo "<td>".$client["id"]."</td>";
                    echo "<td>".$client["nom"]."</td>";
                    echo "<td>".$client["prenom"]."</td>";
                    echo "<td>".$client["adresse"]."</td>";
                    echo "<td>".$client["email"]."</td>";
                    echo "<td>".$client["telephone"]."</td>";
                    echo "<td> <button onclick='redirectToDetailsClient(" . $client['id'] . ")'><span class=\"material-symbols-outlined\">person</span></button></td>";
                    echo "<td> <button onclick='redirectToEditClient(". $client['id'] .")'><span class=\"material-symbols-outlined\">edit</span></button> </td>";
                    echo "<td> <button onclick='redirectToDeleteClient(". $client['id'] .")'><span class=\"material-symbols-outlined\">delete</span></button> </td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan="9" style="text-align: center;">
                <button id="btn-add" onclick="redirectToCreateClient()">Ajouter un client</button>
            </td>
        </tr>
    </tbody>
</table>


<script type="text/javascript">
    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "create"
    function redirectToCreateClient() {
        window.location.replace("../Controllers/clientsController.php?action=create");
    }

    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "detail"
    function redirectToDetailsClient(clientId){
        window.location.replace('../Controllers/clientsController.php?action=details&id=' +clientId)
    }

    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "edit"
    function redirectToEditClient(clientId){
        window.location.replace('../Controllers/clientsController.php?action=edit&id=' +clientId)
    }

    // Quand on clique sur le bouton associé à cette fonction on est redirigé vers l'action "delete"
    function redirectToDeleteClient(clientId){
        window.location.replace('../Controllers/clientsController.php?action=delete&id=' +clientId)
    }
    
</script>

</body>
</html>
