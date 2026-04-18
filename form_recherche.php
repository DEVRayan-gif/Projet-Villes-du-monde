 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="page de recherche ">
      <link rel="icon" href="favicon.jpg">
    <title>Recherche</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
 </head>
 <body>
   <?php include('header.php'); 
    ?> 

 <div class="header-image1">
        <img src="images/freecompress-l-intro-1720389972.jpg" alt="Image sous le header">
</div>
<main class="container">
    <div class="catalogue-header1">
        <h1>Villes <span>à la Loupe</span></h1>
        <p class="sous-titre">Explorez les destinations du monde</p>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>
 
   <?php if (isset($_GET['erreur'])): ?>
        <p style="color:red;">⚠️ Caractères non autorisés. Lettres uniquement.</p>
    <?php endif; ?>
        <form action="reponse_recherche.php" method="get">
            <div class="form-group">
                <label for="texte">VILLE</label>
                <input type="text" id="texte" name="texte"  placeholder="Nom de la ville...">
            </div>
            <button type="submit" class="btn-search">Afficher les albums correspondants</button>
        </form>
</main>
       <?php include('footer.php'); 
    ?> 
 </body>
 </html> 
  
