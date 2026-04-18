<header>
  <nav>
    <div class="nav-brand">
      <div class="nav-brand__icon">✦</div>
      <span class="nav-brand__text">Villes <span>du </span>Monde</span>
    </div>

    <!-- Bouton burger (visible uniquement sur mobile) -->
    <button class="nav-burger" id="burgerBtn" aria-label="Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <ul class="nav-links" id="navLinks">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="listing.php">Listing</a></li>
      <li><a href="admin/admin.php">Admin</a></li>
      <li><a href="form_recherche.php" class="nav-cta">Recherche</a></li>
    </ul>
  </nav>
</header>
<script>
// Dans une balise <script> en bas de page
const burger = document.getElementById('burgerBtn');
const navLinks = document.getElementById('navLinks');

burger.addEventListener('click', () => {
  burger.classList.toggle('open');
  navLinks.classList.toggle('open');
});

const links = document.querySelectorAll('.nav-link');

links.forEach(link => {
  link.addEventListener('click', function() {
    // On retire 'active' de tous les liens
    links.forEach(l => l.classList.remove('active'));
    // On ajoute 'active' au lien cliqué
    this.classList.add('active');
  });
});
</script>