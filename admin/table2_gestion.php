
<!DOCTYPE html>
<html lang="fr">
<head>
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Attractionss</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="admin-container">
      <div class="admin-header">
        <h1 class="jaune">Gestion des <span>attractions</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>

    <div class="actions-bar">
        <a href="admin.php" class="btn-retour">← Retour au backoffice</a>
        <a href="table2_new_form.php" class="btn-ajouter">+ Ajouter une attraction</a>
    </div>
 <div class="table-wrap">
<table>
	<thead>
		<tr><td>nom attraction</td><td>Type</td><td>Adresse</td><td>id_ville</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM `attraction`";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['nom_attraction'] . '</td>';
    echo '<td>' . $value['type_attraction'] . '</td>';
    echo '<td>' . $value['adresse_attraction'] . '</td>';
    echo '<td>' . $value['#villes_id'] . '</td>';
    echo '<td> <a class="btn-supprimer" href="table2_delete.php?num=' . $value['id_attraction'] . '" > supprimer </a> </td>';
    echo '<td> <a class="btn-modifier" href="table2_update_form.php?num=' . $value['id_attraction'] . '" > modifier </a> </td>';

    echo '</tr>';
}
?>

</tbody>
</table>
</div>
</div>
</body>
</html>