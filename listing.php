<!DOCTYPE html>
<html lang="fr">
<head>
	    <title>catalogue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page catalogue ville du monde">
    <link rel="icon" href="favicon.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('header.php'); ?>

    <div class="catalogue-header">
        <h1>Villes <span>à la Loupe</span></h1>
        <p class="sous-titre">Explorez les destinations du monde</p>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>
 
    <main class="catalogue-grid">
    <?php
    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
    $mabd->query('SET NAMES utf8;');
    $req = "SELECT * FROM `ville du monde` INNER JOIN attraction ON `ville du monde`.villes_id = attraction.`#villes_id`";
    $resultat = $mabd->query($req);
 
    foreach ($resultat as $value) {
        $pop = number_format($value['villes_population'], 0, ',', ' ');
        $sup = number_format($value['villes_superficie'], 0, ',', ' ');
    ?>
        <div class="ville-card">
            <div class="ville-card__img-wrap">
                <img src="../images/uploads/<?= htmlspecialchars($value['villes_photos']) ?>"
                     alt="<?= htmlspecialchars($value['villes_nom']) ?>">
                <span class="ville-card__pays-badge"><?= htmlspecialchars($value['villes_pays']) ?></span>
            </div>
            <div class="ville-card__body">
                <div class="ville-card__nom"><?= htmlspecialchars($value['villes_nom']) ?></div>
                <div class="ville-card__langue"><?= htmlspecialchars($value['villes_langue']) ?></div>
 
                <div class="ville-card__stats">
                    <div class="stat">
                        <div class="stat__label">Fondation</div>
                        <div class="stat__value"><?= htmlspecialchars($value['villes_date_fondation']) ?></div>
                    </div>
                    <div class="stat">
                        <div class="stat__label">Population</div>
                        <div class="stat__value"><?= $pop ?></div>
                    </div>
                    <div class="stat" style="grid-column: span 2;">
                        <div class="stat__label">Superficie</div>
                        <div class="stat__value"><?= $sup ?> km²</div>
                    </div>
                </div>
 
                <div class="ville-card__attraction">
                    <span class="ville-card__attraction-icon">★</span>
                    <div class="ville-card__attraction-text">
                        <strong>À voir</strong>
                        <?= htmlspecialchars($value['nom_attraction']) ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>
</body>
   <?php include('footer.php'); 
    ?> 
</html>