<?php
/**
 * Fall back template file
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches the post type query.
 */

get_header(); // Load header.php logic in our file ?>
  <!-- SLIDER PLEIN ÉCRAN -->
  <div class="slider">
    <div class="slide active" style="background:#FAE41A;">
      <div class="content">
        <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>" alt="Citron" class="can">
        <div class="text">
          <h1>Saveur citron</h1>
          <h3>Fraîcheur de l’été</h3>
          <p>Citron pressé et 30% de sucre ajouté</p>
          <button class="btn">Achetez</button>
        </div>
      </div>
    </div>

    <div class="slide" style="background:#BC4749;">
      <div class="content">
        <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_fraise.png');?>" alt="Fraise" class="can">
        <div class="text">
          <h1>Saveur fraise</h1>
          <h3>Fraise fraîchement cueillie</h3>
          <p>100% naturel, zéro sucre ajouté</p>
          <button class="btn">Achetez</button>
        </div>
      </div>
    </div>

    <div class="slide" style="background:#FB8500;">
      <div class="content">
        <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_peche.png');?>" alt="Pêche" class="can">
        <div class="text">
          <h1>Saveur pêche</h1>
          <h3>Douceur du verger</h3>
          <p>Pêche juteuse et naturelle</p>
          <button class="btn">Achetez</button>
        </div>
      </div>
    </div>

    <div class="slide" style="background:#850F1A;">
      <div class="content">
        <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_cerise.png');?>" alt="Cerise" class="can">
        <div class="text">
          <h1>Saveur cerise</h1>
          <h3>Cerise fraîche et sans ajouts</h3>
          <p>Zéro sucres ajoutés, zéro calories</p>
          <button class="btn">Achetez</button>
        </div>
      </div>
    </div>

    <!-- Flèches cercle blanc + flèche noire -->
    <button class="arrow left" id="prev">←</button>
    <button class="arrow right" id="next">→</button>

    <!-- Petits points -->
    <div class="dots">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>

  <script>
  const slides = document.querySelectorAll('.slide');
  const dots   = document.querySelectorAll('.dot');
  let index = 0;

  // Bouton gauche
  document.getElementById('prev').onclick = () => {
    index = index > 0 ? index - 1 : slides.length - 1;
    update();
  };

  // Bouton droit
  document.getElementById('next').onclick = () => {
    index = index < slides.length - 1 ? index + 1 : 0;
    update();
  };

  // Met à jour l'affichage
  function update() {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
  }

  // Affichage initial
  update();
</script>


<?php get_footer(); // Load footer.php logic in our file ?>