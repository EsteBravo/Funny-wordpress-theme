<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */
get_header(); // Load header.php logic in our file ?>
<section class="hero">
    <!-- Triangle bas (nécessaire pour la 3e couleur) -->
    <div class="triangle-bas"></div>

    <div class="hero-content">
        <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>" alt="canette lemon" class="hero-can">

        <div class="hero-text">
            <h1>Funny des boissons<br> énergisantes pour tout le monde</h1>
            <a href="#" class="btn">Voir nos produits</a>
        </div>
    </div>
</section>



<section class="apropos">
    <div class="apropos-circle">
        <h2>A propos</h2>
    </div>

    <div class="apropos-content">
        <div class="apropos-text">
            <p>
                Funty, c’est plus qu’une boisson énergisante, une vague de fraîcheur et de bonne humeur en canette !<br><br>
                Pensée pour ceux qui veulent garder le rythme tout en profitant des saveurs de l’été, Funny combine une énergie éclatante avec un goût fruité et rafraîchissant.<br>
                Que tu sois en pleine session de sport, en soirée ou simplement à la recherche d’un petit boost dans ta journée, Funny t’accompagne avec son énergie positive et son style coloré.
            </p>
            <a href="#" class="btn-yellow">Voir plus</a>
        </div>

        <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>" alt="canette lemon" class="apropos-can">
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
