<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="admin-container">

    <div class="admin-header">
        <h1 class="jaune">Élément <span>supprimé ✓</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>

    <div class="actions-bar">
        <a href="table1_gestion.php" class="btn-retour">← Retour au tableau de bord</a>
    </div>

    <div class="form-wrap">
<?php
// recupérer dans l'url l'id de la ville à supprimer
$id = $_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
$mabd->query('SET NAMES utf8;');

$req1 = 'DELETE FROM attraction WHERE `#villes_id` = ' . intval($id);
$mabd->query($req1);

$req2 = 'DELETE FROM `ville du monde` WHERE villes_id = ' . intval($id);
$mabd->query($req2);

echo '<h2>vous venez de supprimer la ville numéro ' . intval($id) . '</h2>';
?>
</div>
</div>
</body>
</html>