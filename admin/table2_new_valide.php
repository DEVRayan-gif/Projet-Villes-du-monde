<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>attraction ajoutée</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="admin-container">

    <div class="admin-header">
        <h1 class="jaune">attraction <span>ajoutée ✓</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>

    <div class="actions-bar">
        <a href="table2_gestion.php" class="btn-retour">← Retour au tableau de bord</a>
    </div>

    <div class="form-wrap">
<?php
$nom=$_POST['name'];
$type=$_POST['type']??'';
$adresse=$_POST['adresse'];
$ville=$_POST['numauteur'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
$mabd->query('SET NAMES utf8;');
$req = 'INSERT INTO `attraction`(nom_attraction,type_attraction,adresse_attraction, `#villes_id`) VALUES("'.$nom.'","'.$type.'","'.$adresse.'","'.$ville.'")';
echo $req;
$resultat = $mabd->query($req);

?>
</tbody>
</table>
</div>
</div>
</body>
</html>