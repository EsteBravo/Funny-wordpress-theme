<?php
/*
Template Name: Page Produit
*/
get_header(); // Load header.php logic in our file ?>
    <section class="funny-lemon-section">
  <div class="funny-lemon-container">
    <div class="funny-lemon-image">
      <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_cerise.png');?>" alt="Funny Cerise">
    </div>
    <div class="funny-lemon-content">
      <h2>Funny Cerise</h2>
      <p>
        Funny Cerise est une boisson appréciée dans le monde entier par
        les athlètes de haut niveau, les étudiants, ceux qui ont des
        métiers exigeants et durant les longs trajets en voiture
      </p>
      <a href="#" class="funny-lemon-btn">Voir nos produits</a>
    </div>
  </div>
</section>





<section class="section">
        <h2>Funny Cerise éveil vos sens</h2>
        <div class="cards">
            <div class="card">
                <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/fatigue.png');?>" alt="Icon_fatigue">
                <h3>Bien démarrer la journée</h3>
                <p>Funny Lemon contient du sucre, une forme de glucide à absorption rapide impliquée dans une large gamme de processus biologiques et une source d'énergie pour le cerveau et les muscles.</p>
            </div>
            <div class="card">
                <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/focus.png');?>" alt="Focus_cible">
                <h3>Rester focus</h3>
                <p>Funny Lemon contient de la caféine qui contribue à améliorer la concentration et à augmenter la vigilance.</p>
            </div>
            <div class="card">
                <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/energie.png');?>" alt="Reboost">
                <h3>Boost d’énergie</h3>
                <p>Funny Lemon contient des vitamines du groupe B (niacine, acide pantothénique, B6, B12), qui contribuent à réduire la fatigue et de l'épuisement.</p>
            </div>
        </div>
</section>





<section class="produits" style= "background-image: url('<?php echo esc_url(get_template_directory_uri(). '/assets/img/bg_produits.png');?>');">
    <div class="produits-list">
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_cerise.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_peche.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_fraise.png');?>"></a>
    </div>
</section>





<section class="collaborators-section">
    <h2>Nos collaborateurs</h2>

    <div class="collaborators-container">

        <!-- Carte Gotaga -->
        <div class="collaborator-card">
            <div class="card-header youtube">
                <span>Youtube</span>
            </div>
            <div class="card-body">
                <img class="avatar" src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/gotaga.png');?>" alt="Gotaga">
                <h3>Gotaga</h3>
                <p>
                    Vraiment une qualité et un boost d’énergie quasi immédiat,
                    en plus c’est naturel et fait avec des produits locaux.
                </p>
            </div>
        </div>

        <!-- Carte Wembanyama -->
        <div class="collaborator-card">
            <div class="card-header sport">
                <span>BASKET</span>
            </div>
            <div class="card-body">
                <img class="avatar" src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/wemb.png');?>" alt="Wembanyama">
                <h3>WEMBANYAMA</h3>
                <p>
                    C’est incroyable, depuis que j’ai testé je prends une canette avant chaque match.
                </p>
            </div>
        </div>

        <!-- Carte Volley -->
        <div class="collaborator-card">
            <div class="card-header sport">
                <span>VOLLEY</span>
            </div>
            <div class="card-body">
                <img class="avatar" src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/lucille.png');?>"alt="Lucille Gicquel">
                <h3>LUCILLE GICQUEL</h3>
                <p>
                    Je recommande à 100%, je ne savais pas que c’était possible
                    de faire une boisson aussi énergisante et naturelle.
                </p>
            </div>
        </div>

    </div>

    <a href="#" class="cta-btn">Nos collaborateurs</a>
</section>





<div class="footer-separator"></div>
<section class="contact-section" id="contact">
    <h2 class="contact-title">Contact</h2>

    <div class="contact-container">

        <div class="contact-text">
            <h3>Besoin d’infos sur nos boissons, nos saveurs ou nos events ?</h3>
            <p>Une idée, un partenariat ou juste envie d’échanger ?</p>
            <p>Funny te répond toujours avec énergie</p>
            <p>Laisse-nous un message, on revient vers toi en un éclair !</p>
        </div>

        <form class="contact-form">
            <label for="email">Email</label>
            <input type="email" id="email" required>

            <label for="subject">Objet</label>
            <input type="text" id="subject" required>

            <label for="message">Message</label>
            <textarea id="message" rows="6" required></textarea>

            <button type="submit" class="contact-btn">Envoyer</button>
        </form>

    </div>
</section>


<?php get_footer(); // Load footer.php logic in our file ?>