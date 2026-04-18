<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page d'accueil ville du monde">
    <link rel="icon" href="favicon.jpg">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include('header.php'); ?>

    <div class="header-image">
        <img src="images/villes-touristiques.jpg" alt="Image sous le header">
    </div>
<main class="main-content">
 <section class="section">
            <h2 class="lam">Bienvenue sur mon site</h2>
            <a href="listing.php" class="btn">Voir la liste des villes</a>
        </section>
</main>
<!----------------------------------------------PARTENAIRES en scss-------------------------------------------->
<div class="strip-wrapper">
  <div class="strip-track" id="track">

        <img src="images/Sydney.jpg"  alt="" />
         <img src="images/Bukchon_hanok village _ Seoul.jpg"  alt="" />
          <img src="images/cae1711cdacf4475e593671e97c627cc.jpg"  alt="" />
           <img src="images/Canal-cruises-Amsterdam-scaled.jpg"  alt="" />
            <img src="images/Melbourne, Australia.jpg"  alt="" />
             <img src="images/thumb_14939205_cover_header.jpeg"  alt="" />
              <img src="images/Nyhavn, Copenhagen, Denmark.jpg"  alt="" />
               <img src="images/Prague.jpg"  alt="" />

  </div>
</div>
<script>
  // Duplique automatiquement les images pour un défilement infini parfait
  const track = document.getElementById('track');
  const imgs = Array.from(track.querySelectorAll('img'));
  imgs.forEach(img => {
    const clone = img.cloneNode(true);
    track.appendChild(clone);
  });
</script>
</body>
</html>
<?php
include('footer.php');
?>    
</body>
</html>