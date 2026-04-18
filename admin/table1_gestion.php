<!DOCTYPE html>
<html>
<head>
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des villes</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="admin-container">
      <div class="admin-header">
        <h1 class="jaune">Gestion des <span>Villes</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>

    <div class="actions-bar">
        <a href="admin.php" class="btn-retour">← Retour au backoffice</a>
        <a href="table1_new_form.php" class="btn-ajouter">+ Ajouter une ville</a>
    </div>
       <div class="table-wrap">
<table>
	<thead>
		<tr><td>nom ville</td><td>pays</td><td>population</td><td>superficie (km²)</td><td>date de fondation (année)</td><td>photos</td><td>langue</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM `ville du monde`";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['villes_nom'] . '</td>';
    echo '<td>' . $value['villes_pays'] . '</td>';
    echo '<td>' . $value['villes_population'] . '</td>';
    echo '<td>' . $value['villes_superficie'] . '</td>';
    echo '<td>' . $value['villes_date_fondation'] . '</td>';
    echo '<td>' . $value['villes_photos'] . '</td>';
    echo '<td>' . $value['villes_langue'] . '</td>';
    echo '<td> <a class="btn-supprimer" href="table1_delete.php?num=' . $value['villes_id'] . '" > supprimer </a> </td>';
    echo '<td> <a class="btn-modifier" href="table1_update_form.php?num=' . $value['villes_id'] . '" > modifier </a> </td>';

    echo '</tr>';
}
?>
</tbody>
</table>
</div>
 </div>
</body>
</html>