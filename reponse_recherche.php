 <?php
$texte_brut = $_GET['texte'] ?? '';

// Vérification : uniquement lettres (accents inclus), espaces et tirets
if (!preg_match('/^[a-zA-ZÀ-ÿ\s\-]{1,100}$/', $texte_brut)) {
    header('Location: form_recherche.php?erreur=1');
    exit;
}

$texte = htmlspecialchars($texte_brut, ENT_QUOTES, 'UTF-8');
?>

 <!DOCTYPE html>
<html lang="fr">
<head>
	    <title>catalogue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page reponse ville du monde">
    <link rel="icon" href="favicon.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('header.php'); 
    ?> 
    
    <div class="catalogue-grid">
    <?php
    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse');
    $mabd->query('SET NAMES utf8;');
 $req = "SELECT * FROM `ville du monde` INNER JOIN attraction ON `ville du monde`.villes_id = attraction.`#villes_id` WHERE villes_nom LIKE :texte";
$stmt = $mabd->prepare($req);
$stmt->execute([':texte' => '%' . $texte . '%']);
$resultat = $stmt->fetchAll();
  ?>
  </div>
  <div class="catalogue-header">
     <?php if (empty($resultat)): ?>
        <h1>Aucune ville trouvée pour "<span><?= $texte ?></span>"</h1>
    <?php else: ?>
        <h1>Ici la ville dont <span>le nom est : <?= $texte ?></span></h1>
    <?php endif; ?>
    <div class="separator"><span class="separator-dot"></span></div>
</div>
<main class="catalogue-grid">
    <?php
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
</html>
       <?php include('footer.php'); 
    ?> 
 </body>
 </html> 
  
