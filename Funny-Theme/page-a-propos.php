<?php
/**
 * Fall back template file
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches the post type query.
 */

get_header(); // Load header.php logic in our file ?>
    <section class="about-funny">
    <div class="about-bar"></div>

    <h2 class="about-title">A propos de funny</h2>

    <div class="about-content">
        <div class="about-text">
            <p>
                Créer par une équipe jeune, nous voulions créer une boisson
                pour les jeunes avec des produit locaux et avec le moins de
                produits chimique possible, nos boissons sont à 100% naturel
            </p>
        </div>

        <div class="about-image">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/equipe.png');?>" alt="Équipe Funny">
        </div>
    </div>
</section>




<section class="formula-section">
    <h2 class="formula-title">Notre formule</h2>

    <div class="formula-grid">
        <div class="formula-card">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/cafe.png');?>" alt="Caféine naturelle">
            <h3>CAFÉINE NATURELLE</h3>
            <p>Pour stimuler ton esprit et réveiller ton énergie.</p>
        </div>

        <div class="formula-card">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/taurine.png');?>" alt="Taurine">
            <h3>TAURINE</h3>
            <p>Pour améliorer ta concentration et tes performances physiques.</p>
        </div>

        <div class="formula-card">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/vitamine.png');?>" alt="Vitamines">
            <h3>VITAMINES B3, B5<br>B6 &amp; B12</h3>
            <p>Essentielles pour réduire la fatigue et soutenir ton métabolisme énergétique.</p>
        </div>

        <div class="formula-card">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/sucre.png');?>" alt="Sucre de canne">
            <h3>SUCRE DE CANNE ET<br>ARÔMES NATURELS</h3>
            <p>Pour un goût authentique et fruité.</p>
        </div>
    </div>
</section>




<section class="events-section">
    <h2 class="events-title">Nos événements</h2>

    <div class="events-grid">
        <!-- CARD 1 -->
        <div class="event-card">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/first_event.png');?>" alt="Funny Summer Wave">
            <h3>Funny Summer Wave</h3>
            <p>
                Plonge dans l’ambiance estivale signée Funny !<br>
                Un événement en plein air avec DJ sets, zones chill et dégustations
                de toutes nos saveurs rafraîchissantes.<br>
                Entre musique, fun et soleil, Funny Summer Wave c’est la vague
                d’énergie qui fait vibrer ton été.
            </p>
            <a href="#" class="btn-card">Participez</a>
        </div>

        <!-- CARD 2 -->
        <div class="event-card">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/second_event.png');?>" alt="Funny Energy Challenge">
            <h3>Funny Energy Challenge</h3>
            <p>
                Dépasse toi dans une compétition fun et pleine d’énergie !<br>
                Activités sportives, défis rafraîchissants et récompenses surprises.<br>
                Un seul objectif : t’éclater en équipe !
            </p>
            <a href="#" class="btn-card">Participez</a>
        </div>

        <!-- CARD 3 -->
        <div class="event-card">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/third_event.png');?>" alt="Funny Vibes Festival">
            <h3>Funny Vibes Festival</h3>
            <p>
                Quand la musique rencontre l’énergie !<br>
                Sons électro & urbains, zone chill, photobooth et boissons Funny à volonté.<br>
                Le combo parfait pour vivre l’été à fond.
            </p>
            <a href="#" class="btn-card">Participez</a>
        </div>
    </div>
    <a href="#" class="order-btn">Voir plus d'événements</a>
</section>


<div class="footer-separator"></div>
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



<section class="produits" style= "background-image: url('<?php echo esc_url(get_template_directory_uri(). '/assets/img/bg_produits.png');?>');">
    <div class="produits-list">
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_cerise.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_peche.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_fraise.png');?>"></a>
    </div>
</section>




<section class="order-section">
    <h2 class="order-title">Passez commande maintenant</h2>

    <div class="order-content">

        <div class="order-image">
            <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>" alt="Canette Funny Lemon">
        </div>

        <div class="order-box">
            <p>
                Passez vos commandes maintenant et soyez livré en moins d’une semaine garantie <br>
                ( frais de livraison offerte )
            </p>

            <a href="#" class="order-btn">Commander</a>
        </div>

    </div>
</section>




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