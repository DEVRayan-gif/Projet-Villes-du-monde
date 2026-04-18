<!DOCTYPE html>
<html lang="fr">
<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une attraction</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="admin-container">

    <div class="admin-header">
        <h1 class="jaune">Ajouter une <span>attraction</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>
        <div class="actions-bar">
        <a href="table2_gestion.php" class="btn-retour">← Retour au tableau de bord</a>
    </div>
     <div class="form-wrap">
<form method="POST" enctype="multipart/form-data" action="table2_new_valide.php">
    <div class="form-field">
   nom de l'attraction:<input type="text" name="name"><br>
   </div>
   <div class="form-field">
    type de l'attraction:<input type="text" name="type"><br>
    </div>
    <div class="form-field">
    adresse de l'attraction:<input type="text" name="adresse"><br>
    </div>
    <div class="form-field">
   ville:
<select name="numauteur">
    	<?php
		$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
$mabd->query('SET NAMES utf8;');
		$req = "SELECT * FROM `ville du monde`";
		$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<option value="'.$value['villes_id'].'">'.$value['villes_nom'].'</option>';
}
?>
</select><br><br>
</div>
     <button type="submit" class="btn-ajouter">Ajouter l'attraction</button>
</form>
 
</tbody>
</table>
</div>
</div>
</body>
</html>