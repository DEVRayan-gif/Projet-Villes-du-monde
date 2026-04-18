<!DOCTYPE html>
<html lang="fr">
<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une ville</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="admin-container">

    <div class="admin-header">
        <h1 class="jaune">Modification d'une <span>Ville</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>
        <div class="actions-bar">
        <a href="table1_gestion.php" class="btn-retour">← Retour au tableau de bord</a>
    </div>
<?php
$num = $_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM `ville du monde` WHERE villes_id = " . intval($num);
$resultat = $mabd->query($req);
$album = $resultat->fetch();
?>
  <div class="form-wrap">
<form method="POST" enctype="multipart/form-data" action="table1_update_valide.php">
    <div class="form-field">
<input type="hidden" name="num"  value="<?php echo $album['villes_id']; ?>">
</div>
<div class="form-field">
   nom de la ville:<input type="text" name="name" value="<?php echo $album['villes_nom'] ?>"><br>
   </div>
   <div class="form-field">
    pays de la ville:<input type="text" name="pays" value="<?php echo $album['villes_pays'] ?>"><br>
    </div>
    <div class="form-field">
    population de la ville:<input type="number" name="population" value="<?php echo $album['villes_population'] ?>"><br>
    </div>
    <div class="form-field">
    superficie de la ville:<input type="number" step="0.01" name="superficie" value="<?php echo $album['villes_superficie'] ?>"><br>
    </div>
    <div class="form-field">
    date de fondation de la ville:<input type="text" name="date" value="<?php echo $album['villes_date_fondation'] ?>"><br>
    </div>
    <div class="form-field">
    photos:<input type="file" accept="image/*" name="photos"><br>
    </div>
    <div class="form-field">
    langue de la ville:<input type="texte" name="langue" value="<?php echo $album['villes_langue'] ?>"><br>
    </div>
        <button type="submit" class="btn-ajouter">Modifier la ville</button>
</form>

</div>
</div>
</body>
</html>