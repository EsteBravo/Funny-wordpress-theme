<?php 
/**
 * Footer template file
 * This file contains the footer structure of the theme including:
 * - Footer content
 * - Closing body and HTML tags
 * - WordPress footer scripts that run all the necessary scripts called with some hooks.
 */
?>
<!-- Barre colorée de séparation -->
<div class="footer-separator"></div>
<footer class="footer">
  <div class="footer-container">
    
    <div class="footer-column">
      <h3>Nos produits</h3>
      <ul>
        <li><a href="#">Nos collaborations</a></li>
        <li><a href="#">Nos événements</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>A propos</h3>
      <ul>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Votre panier</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>Mention légal</h3>
      <ul>
        <li><a href="#">Conditions générales</a></li>
        <li><a href="#">Politiques de confidentialités</a></li>
        <li><a href="#">Configurations des cookies</a></li>
      </ul>
    </div>

  </div>
</footer>

    <?php /* Hook for scripts - Required for WordPress to load footer scripts add in functions.php */
    wp_footer(); 
    ?>
    <script>
document.addEventListener("scroll", () => {

    const heroCan = document.querySelector(".hero-can");
    const aproposCan = document.querySelector(".apropos-can");

    // Position finale = position de la canette du A propos
    const targetRect = aproposCan.getBoundingClientRect();
    const endY = targetRect.top + window.scrollY -200;  // ajuste la hauteur finale

    // Scroll utilisé pour l’animation
    const maxScroll = window.innerHeight / 1.2; 
    const scrolled = window.scrollY;

    // Ratio 0 → 1
    let progress = Math.min(scrolled / maxScroll, 1);

    // Move can 
    heroCan.style.transform = `translateY(${progress * endY}px)`;

    // switch visibility
    if (progress >= 1) {
        aproposCan.style.opacity = 1;
        heroCan.style.opacity = 0;
    } else {
        aproposCan.style.opacity = 0;
        heroCan.style.opacity = 1;
    }

});
</script>

</body>
</html> 