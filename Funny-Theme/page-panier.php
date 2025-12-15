<?php
/**
 * Fall back template file
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches the post type query.
 */

get_header(); // Load header.php logic in our file ?>
    <section class="cart-section">
    <h2 class="cart-title">Vos produits</h2>

    <div class="cart-layout">

        <!-- LISTE PRODUITS -->
        <div class="cart-products">

            <div class="cart-item">
                <div class="cart-image">
                    <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>" alt="Funny Lemon">
                </div>

                <div class="cart-info">
                    <h3>Funny Lemon</h3>

                    <div class="cart-actions">
                        <div class="cart-qty">
                            <button>-</button>
                            <span>1</span>
                            <button>+</button>
                        </div>

                        <div class="cart-price">2.30€</div>
                    </div>

                    <div class="cart-buttons">
                        <button class="btn-buy">Achetez</button>
                        <button class="btn-remove">Supprimé</button>
                    </div>
                </div>
            </div>

            <div class="cart-divider"></div>

            <div class="cart-item">
                <div class="cart-image">
                    <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_fraise.png');?>" alt="Funny fraise">
                </div>

                <div class="cart-info">
                    <h3>Funny fraise</h3>

                    <div class="cart-actions">
                        <div class="cart-qty">
                            <button>-</button>
                            <span>2</span>
                            <button>+</button>
                        </div>

                        <div class="cart-price">4.60€</div>
                    </div>

                    <div class="cart-buttons">
                        <button class="btn-buy">Achetez</button>
                        <button class="btn-remove">Supprimé</button>
                    </div>
                </div>
            </div>

        </div>

        <!-- TOTAL -->
        <aside class="cart-summary">
            <h3>Total</h3>

            <div class="summary-line">
                <span>Adresse livraison</span>
                <strong>France</strong>
            </div>

            <div class="summary-line">
                <span>Prix</span>
                <strong>6.90€</strong>
            </div>

            <button class="btn-pay">Payer</button>
        </aside>

    </div>
</section>




<section class="produits" style= "background-image: url('<?php echo esc_url(get_template_directory_uri(). '/assets/img/bg_produits.png');?>');">
    <div class="produits-list">
        <a href="<?php echo get_permalink(112); ?>"><img src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/canette_lemon.png');?>"></a>
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