<?php
/**
 * Fall back template file
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches the post type query.
 */

get_header(); // Load header.php logic in our file ?>

<section class="collab-section">
    <h2 class="collab-title">Collaborateurs</h2>

    <div class="collab-slider">

        <!-- SLIDE 1 -->
        <div class="collab-slide active">
            <div class="collab-content">
                <div class="collab-left">
                    <h3 class="collab-name">Gotaga</h3>
                    <p class="collab-role">Youtubeur</p>
                    <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/gota.png');?>" class="collab-photo">
                </div>

                <div class="collab-right">
                    <p class="collab-text">
                        “Depuis que je connais cette nouvelle marque
                        j’ai laissé tomber mon ancienne collaboration pour eux
                        vraiment une qualité et un boost d’énergie quasiment 
                        immédiat, en plus c’est naturel et fait avec des produits locaux”   
                    </p>
                    <a class="collab-button" href="#">Voir notre à propos</a>
                </div>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="collab-slide">
            <div class="collab-content">
                <div class="collab-left">
                    <h3 class="collab-name">Victor Wembanyama</h3>
                    <p class="collab-role">Joueur de basket</p>
                    <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/wemba.png');?>" class="collab-photo">
                </div>

                <div class="collab-right">
                    <p class="collab-text">
                        “ C’est incroyable, depuis que j’ai tester je prend une canette avant chaque match. Je les remercie de m’avoir proposer une collaboration c’est vraiment une chance d’avoir une boisson pareil aussi naturel et local”
                    </p>
                    <a class="collab-button" href="#">Voir notre à propos</a>
                </div>
            </div>
        </div>

        <!-- SLIDE 3 (PRÊTE POUR TOI) -->
        <div class="collab-slide">
            <div class="collab-content">
                <div class="collab-left">
                    <h3 class="collab-name">Lucille Gicquel</h3>
                    <p class="collab-role">Joueuse de volley</p>
                    <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/lulu.png');?>" class="collab-photo">
                </div>

                <div class="collab-right">
                    <p class="collab-text">
                        “ Je recommande à 100%, je ne savais pas que c’était possible de faire une boisson aussi énergisante et naturel et en plus avec des produits locaux. Je suis fier d’être en collaboration avec cette marque.”
                    </p>
                    <a class="collab-button" href="#">Voir notre à propos</a>
                </div>
            </div>
        </div>

        <!-- FLÈCHES -->
        <button class="arrow arrow-left">
            <svg width="26" height="26" viewBox="0 0 24 24">
                <path d="M15 18l-6-6 6-6" stroke="black" stroke-width="2" fill="none" stroke-linecap="round" />
            </svg>
        </button>

        <button class="arrow arrow-right">
            <svg width="26" height="26" viewBox="0 0 24 24">
                <path d="M9 6l6 6-6 6" stroke="black" stroke-width="2" fill="none" stroke-linecap="round" />
            </svg>
        </button>

    </div>
</section>

<!-- ======================= -->
<!-- ========  JS  ========= -->
<!-- ======================= -->

<script>
const slides = Array.from(document.querySelectorAll('.collab-slide'));
const btnPrev = document.querySelector('.arrow-left');
const btnNext = document.querySelector('.arrow-right');

let index = slides.findIndex(s => s.classList.contains('active'));
if (index === -1) index = 0;

function showSlide(i) {
    slides.forEach(s => s.classList.remove('active'));
    index = (i + slides.length) % slides.length;
    slides[index].classList.add('active');
}

btnPrev.addEventListener('click', () => showSlide(index - 1));
btnNext.addEventListener('click', () => showSlide(index + 1));

/* flèches clavier */
window.addEventListener('keydown', e => {
    if (e.key === "ArrowLeft") showSlide(index - 1);
    if (e.key === "ArrowRight") showSlide(index + 1);
});

/* swipe mobile */
let startX = null;
const slider = document.querySelector('.collab-slider');

slider.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
});

slider.addEventListener('touchend', e => {
    if (startX === null) return;

    const endX = e.changedTouches[0].clientX;
    const diff = startX - endX;

    if (Math.abs(diff) > 50) {
        if (diff > 0) showSlide(index + 1);
        else showSlide(index - 1);
    }

    startX = null;
});
</script>





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