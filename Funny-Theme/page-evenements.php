<?php
/**
 * Fall back template file
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches the post type query.
 */

get_header(); // Load header.php logic in our file ?>
    <section class="section-events" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/event.png' ); ?>');">
 
    <div class="section-overlay"></div>

    <div class="section-inner">
        <h2 class="section-title">Nos Évènements</h2>

        <p class="section-desc">
            Nos événements rassemblent plus de <strong>20 000 personnes</strong> chaque année<br>
            <span class="highlight">alors pourquoi pas toi&nbsp;?</span>
        </p>

        <a href="#" class="btn-primary">S’inscrire</a>
    </div>
</section>

<section class="events-section">
    <h2 class="events-title">Inscrivez vous</h2>

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
</section>


<section class="produits" style= "background-image: url('<?php echo esc_url(get_template_directory_uri(). '/assets/img/bg_produits.png');?>');">
    <div class="produits-list">
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_cerise.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_peche.png');?>"></a>
        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_fraise.png');?>"></a>
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