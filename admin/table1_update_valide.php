<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ville Modifiée</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="admin-container">

    <div class="admin-header">
        <h1 class="jaune">Ville <span>modifiée ✓</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>

    <div class="actions-bar">
        <a href="table1_gestion.php" class="btn-retour">← Retour au tableau de bord</a>
    </div>

    <div class="form-wrap">
<?php
$nom=$_POST['name'];
$pays=$_POST['pays']??'';
$population=$_POST['population'];
$superficie=$_POST['superficie'];
$date_fondation=$_POST['date'];
$photos=$_POST['photos']??'';
$langue=$_POST['langue'];
$num = $_POST['num'];
$photo_sauvegarde = $_POST['ancienne_photo']??'';

//vérification du format de l'image téléchargée
if($_FILES["photos"]["name"] != '') {
			$imageType=$_FILES["photos"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
    		//creation d'un nouveau nom pour cette image téléchargée
            // pour éviter d'avoir 2 fichiers avec le même nom
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photos"]["name"];
	

    		// dépot du fichier téléchargé dans le dossier /var/www/r214/images/uploads
	        if(is_uploaded_file($_FILES["photos"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photos"]["tmp_name"], 
	            "../images/uploads/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
			}
    $req = 'UPDATE `ville du monde` SET villes_nom="'.$nom.'", villes_pays="'.$pays.'", villes_population='.$population.', villes_superficie='.$superficie.', villes_date_fondation="'.$date_fondation.'", villes_photos="'.$nouvelleImage.'", villes_langue="'.$langue.'" WHERE villes_id='.intval($num);
} else {
    $req = 'UPDATE `ville du monde` SET villes_nom="'.$nom.'", villes_pays="'.$pays.'", villes_population='.$population.', villes_superficie='.$superficie.', villes_date_fondation="'.$date_fondation.'", villes_langue="'.$langue.'" WHERE villes_id='.intval($num);
}

  

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
$mabd->query('SET NAMES utf8;');
 echo  $req;
$resultat = $mabd->query($req);
?>
</div>
</div>
</body>
</html>